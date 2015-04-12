# BFolliot\Zf-Nl2br
Provides a ZF2 filter for the php nl2br function

## Installation
`BFolliot\Zf-Nl2br` is available through composer. Add "BFolliot/Zf-Nl2br" to your composer.json list. You can specify the latest stable version of `BFolliot\Zf-Nl2br`:

```
"BFolliot\Zf-Nl2br": "1.0.*"
```

To enable the module in your `config/application.config.php` file, add an entry `BFolliot\ZfNl2br` to the list of enabled modules.

## Usage
In your input filter configuration, add the `nl2br` filter to filter the result. An example form:

```php
namespace Application\Form;

use Zend\InputFilter;
use Zend\Form\Form;

class Foo extends Form implements
    InputFilter\InputFilterProviderInterface
{
    public function __construct($name = null)
    {
        parent::__construct($name);

        $this->add(array(
            'name'    => 'text',
            'options' => array(
                'label' => 'Text'
            ),
            'attributes' => array(
                'type'  => 'textarea',
            ),
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'text'  => array(
                'required' => true,
                'filters'  => array(
                    array('name' => 'nl2br'),
                ),
            ),
        );
    }
}
```
