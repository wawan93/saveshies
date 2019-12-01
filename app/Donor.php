<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Donor
 *
 * @property int $id
 * @property string|null $uuid
 * @property string $email
 * @property string $name
 * @property string|null $surname
 * @property int|null $referrer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $phone
 * @property string|null $tg
 * @property string|null $vk
 * @property string|null $inst
 * @property string|null $fb
 * @property string|null $photo
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereFb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereInst($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereReferrer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereTg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereVk($value)
 * @mixin \Eloquent
 */
class Donor extends Model
{
    protected $guarded = ['id'];

    public function scopeVolunteers(Builder $query)
    {
        return $query->where('is_volunteer', '=', true);
    }
}
