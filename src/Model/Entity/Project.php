<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity.
 *
 * @property int $id
 * @property int $name
 * @property int $agent_id
 * @property \App\Model\Entity\Agent $agent
 * @property int $client_id
 * @property \App\Model\Entity\Client $client
 * @property int $skill_id
 * @property \App\Model\Entity\Skill $skill
 * @property int $staffs_ number
 * @property \Cake\I18n\Time $from_date
 * @property \Cake\I18n\Time $to_date
 * @property int $status
 * @property string $memo
 * @property \Cake\I18n\Time $create
 * @property \Cake\I18n\Time $update
 * @property \App\Model\Entity\Enginner[] $enginners
 */
class Project extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
