<?php
namespace PseudoORM\Entity;

class EntidadeBase
{
	/**
	 * @Id
	 * @Column(name='uid')
	 */
	public $uid;

    /**
     * Utilizado para criar entidade com base nos campos do formulário.
     *
     * @param unknown $params
     */
    public function storeFormValues($params)
    {
        foreach ($params as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = htmlspecialchars($value);
            }
        }
    }
}
