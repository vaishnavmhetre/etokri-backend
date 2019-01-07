<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Cart
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cart whereUpdatedAt($value)
 */
	class Cart extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $name
 * @property string $rfid
 * @property int $barcode
 * @property float $price
 * @property int|null $cart_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereRfid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\BillProduct
 *
 * @property int $id
 * @property int $bill_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct whereBillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillProduct whereUpdatedAt($value)
 */
	class BillProduct extends \Eloquent {}
}

namespace App{
/**
 * App\CartProduct
 *
 * @property int $id
 * @property int $cart_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CartProduct whereUpdatedAt($value)
 */
	class CartProduct extends \Eloquent {}
}

namespace App{
/**
 * App\Bill
 *
 * @property int $id
 * @property float $total_cost
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill whereTotalCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Bill whereUpdatedAt($value)
 */
	class Bill extends \Eloquent {}
}

