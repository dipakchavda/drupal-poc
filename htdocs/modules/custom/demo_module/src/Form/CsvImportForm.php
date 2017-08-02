<?php

namespace Drupal\demo_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class CsvImportForm.
 *
 * @package Drupal\demo_module\Form
 */
class CsvImportForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return "csv_import_form";
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
       
    $form["csvfile"] = [
      "#type" => "managed_file",
      "#title" => $this->t("CSV File"),
      '#upload_location' => 'public://csv/',
      '#description' => t('upload file'),
      '#upload_validators' => array(
        'file_validate_extensions' => array('csv, xlsx'),
        // Pass the maximum file size in bytes
        'file_validate_size' => array(MAX_FILE_SIZE*1024*1024),
      ),
    ];
    
    $form["actions_submit"] = [
      "#type" => "submit",
      '#value' => $this->t("Upload and Process")
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    #parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $fid = $form_state->getValue('csvfile');
    #kint($fid);
    $csvfile = \Drupal\file\Entity\File::load(reset($fid));
    $filepath = drupal_realpath($csvfile->getFileUri());
    
    #kint($csvfile->getFileName());
    #kint(drupal_realpath($csvfile->getFileUri())); die;
    
    #$objPhpExcel = new \PHPExcel();
    #kint($objPhpExcel);
    #die;
    
    $data = $this->readData($filepath);

  }
  
  private function readData($file) {
    //  Read your Excel workbook
    try {
        $inputFileType = \PHPExcel_IOFactory::identify($file);
        $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel = $objReader->load($file);
        
        //  Get worksheet dimensions
        $worksheet = $objPHPExcel->getSheet(0); 
        $highestRow = $worksheet->getHighestRow(); 
        $highestColumn = $worksheet->getHighestColumn();
        
        kint($worksheet->getTitle());
        #kint($highestRow);
        #kint($highestColumn);
        
        //  Loop through each row of the worksheet in turn
        /*for ($row = 1; $row <= $highestRow; $row++) {
          //  Read a row of data into an array
          $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
          //  Insert row data array into your database of choice here
          kint($rowData);
        }*/
        foreach($worksheet->getRowIterator() as $row) {
          #echo ' Row Number ' . $row->getRowIndex() . "<br/>";
          
          $cellIterator = $row->getCellIterator();
          $cellIterator->setIterateOnlyExistingCells(true);
          foreach ($cellIterator as $cell) {
            if (!is_null($cell)) {
              echo ' Cell - ' . $cell->getCoordinate() . ' - <br/>';
              #echo $cell->getFormattedValue() . "<br/>";
              #echo $cell->getValue() . "<br/>";
              #$richtextService = new \PHPExcel_RichText($cell);
              #$value = $richtextService->getRichTextElements(); // html in it
              
              $value = $cell->getStyle();
              #kint($cell);
              #kint($cell->getStyle());
              #die;
            }
          }
        }
        
    } catch(\Exception $e) {
        die('Error loading file "'.pathinfo($file,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
    
    die("End");

  }
  
}
