<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Donation
 *
 * @property int $id
 * @property int $donor_id
 * @property int $recurrent
 * @property int $amount
 * @property string $payed_through
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation whereDonorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation wherePayedThrough($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation whereRecurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Donation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Donation extends Model
{
    //
}
