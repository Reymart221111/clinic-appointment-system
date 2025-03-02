<?php 

namespace App\Traits;

trait LivewireLiveValidationTrait
{
    public function updated($propertyName)
    {
        if ($this->isFormField($propertyName)) {
            $fieldName = $this->getFieldNameWithoutPrefix($propertyName);
            $this->form->validateOnly($fieldName);
        }
    }

    private function isFormField($propertyName)
    {
        return str_starts_with($propertyName, 'form.');
    }

    private function getFieldNameWithoutPrefix($propertyName)
    {
        return str_replace('form.', '', $propertyName);
    }
}