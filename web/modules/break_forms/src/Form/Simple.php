<?php

namespace Drupal\break_forms\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Implements the Simple form controller.
 *
 * @see \Drupal\Core\Form\FormBase
 */
class Simple extends FormBase
{
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $connection = \Drupal::database();
        $form['Nombre Adoptante'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Nombre Completo'),
            '#required' => TRUE,
        ];
        $form['user_email'] = [
            '#type' => 'email',
            '#title' => $this->t('email'),
            '#required' => TRUE,
            '#size' => 60,
            '#maxlength' => 128,
           ];

        $form['date'] = array(
            '#type' => 'date',
            '#title' => $this->t('Fecha Nacimiento'),
            '#size' => 20,
            '#required' => TRUE,
        );

        $form['mascota seleccionada'] = [
            '#type' => 'select',
            '#title' => $this->t('Mascota Seleccionada'),
            '#options' => [


            ],

        ];
        $form['actions'] = [
            '#type' => 'actions',
        ];
        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Enviar Solicitud'),
        ];

        $form['#theme'] = 'break_forms';

        return $form;
    }
    public function getFormId()
    {
        return 'break_forms_simple';
    }
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
    }
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
    }
}
