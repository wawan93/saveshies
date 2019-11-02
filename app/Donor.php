<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Donor
 *
 * @property int $id
 * @property string $uuid
 * @property string $email
 * @property string $name
 * @property string $surname
 * @property int $referrer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereReferrer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donor whereUuid($value)
 * @mixin \Eloquent
 */
class Donor extends Model
{
    protected $guarded = ['id'];
}
