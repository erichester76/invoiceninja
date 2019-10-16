<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2019. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Helpers\Invoice;

/**
 * Class for tax calculations
 */
trait Taxer
{

	public function taxer($amount, $tax_rate)
	{
		return round($amount * (($tax_rate ? $tax_rate : 0) / 100), 2);
	}

}