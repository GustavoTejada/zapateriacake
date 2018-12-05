<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sale Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $Fecha
 * @property int $Cantidad
 * @property int $shoe_id
 *
 * @property \App\Model\Entity\Shoe $shoe
 */
class Sale extends Entity
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
        'Fecha' => true,
        'Cantidad' => true,
        'shoe_id' => true,
        'shoe' => true
    ];
}
