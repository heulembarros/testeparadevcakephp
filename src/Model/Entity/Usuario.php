<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $cpf
 * @property string|null $cnpj
 * @property string|null $telefone
 * @property string|null $obs
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'email' => true,
        'cpf' => true,
        'cnpj' => true,
        'telefone' => true,
        'obs' => true,
        'created' => true,
        'modified' => true,
    ];
}
