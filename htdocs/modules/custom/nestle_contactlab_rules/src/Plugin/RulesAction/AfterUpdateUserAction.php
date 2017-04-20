<?php

/**
 * @file
 * Contains \Drupal\nestle_contactlab_rules\Plugin\RulesAction\AfterUpdateUserAction.
 */

namespace Drupal\nestle_contactlab_rules\Plugin\RulesAction;

use Drupal\Core\Annotation\Action;
use Drupal\Component\Utility\SafeMarkup;
use Drupal\Core\Annotation\Translation;
use Drupal\rules\Core\RulesActionBase;
use Drupal\user\UserInterface;

/**
 * Performe an action after, user details has been updated.
 *
 * @RulesAction(
 *   id = "after_update_user_action",
 *   label = @Translation("Nestle - Users data sent to Contact Lab CRM, When User update profile."),
 *   category = @Translation("Nestle"),
 *   context = {
 *     "user" = @ContextDefinition("entity:user",
 *       label = @Translation("User"),
 *       required = TRUE
 *     ),
 *   }
 * )
 *
 */
class AfterUpdateUserAction extends RulesActionBase {
	
	/** Default return message */
	private $message = "Error";

	/**
	 * Send user's data to Contact lab for update.
	 *
	 * @param \Drupal\user\UserInterface $user
	 *   User object.
	 *
	 */
	protected function doExecute(UserInterface $user) {
		
		if ($user->id()) {
			$this->message = SafeMarkup::checkPlain("UPDATE::User's Data has been sent to contactlab. " . $user->get('mail')->getValue()[0]['value']);
		}
		
		drupal_set_message($this->message, $type = 'status', FALSE);
	}
}
