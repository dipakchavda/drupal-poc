<?php

namespace Drupal\dummy\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
/**
 * Class IndexController.
 */
class IndexController extends ControllerBase {

  /**
   * Getdata.
   *
   * @return []
   */
  public function getData(Request $request) {
    
    $response = ['status' => 200, 'statusText' => 'OK', 'response' => [], 'method' => $request->getMethod()];
    
    try {
      $response['response'] = "DateTime: " . date('Y-m-d H:i:s');
    }
    catch(MethodNotAllowedHttpException $e) {
      $response['statusText'] = $this->t('Requested method is not supported.');
    }
    catch(\Exception $e) {
      $response['statusText'] = $this->t('Requested method is not supported.');
    }
    
    return new JsonResponse($response);
  }
  /**
   * Create.
   *
   * @return []
   */
  public function createData(Request $request) {
    
    $response = ['status' => 200, 'statusText' => 'OK', 'response' => [], 'method' => $request->getMethod()];
    
    if ("POST" === $request->getMethod()) {
      if ( 0 === strpos( $request->headers->get( 'content-type' ), 'application/json' ) ) {
        $data = json_decode( $request->getContent(), TRUE );
        $response['response'] = $data;
        $request->request->replace( is_array( $data ) ? $data : [] );
      }
    }
    else {
      $response['statusText'] = $this->t('Requested method is not supported.');
    }
    return new JsonResponse($response);
    
  }
  /**
   * Update.
   *
   * @return []
   */
  public function updateData(Request $request) {
    
    $response = ['status' => 200, 'statusText' => 'OK', 'response' => [], 'method' => $request->getMethod()];
    
    if ("PUT" === $request->getMethod()) {
      if ( 0 === strpos( $request->headers->get( 'content-type' ), 'application/json' ) ) {
        $data = json_decode( $request->getContent(), TRUE );
        $response['response'] = $data;
        $request->request->replace( is_array( $data ) ? $data : [] );
      }
    }
    else {
      $response['statusText'] = $this->t('Requested method is not supported.');
    }
    return new JsonResponse($response);
  }
  /**
   * Delete.
   *
   * @return []
   */
  public function deleteData(Request $request) {
    
    $response = ['status' => 200, 'statusText' => 'OK', 'response' => [], 'method' => $request->getMethod()];
    
    if ("DELETE" === $request->getMethod()) {
      if ( 0 === strpos( $request->headers->get( 'content-type' ), 'application/json' ) ) {
        $data = json_decode( $request->getContent(), TRUE );
        $response['response'] = $data;
        $request->request->replace( is_array( $data ) ? $data : [] );
      }
    }
    else {
      $response['statusText'] = $this->t('Requested method is not supported.');
    }
    return new JsonResponse($response);
  }

}
