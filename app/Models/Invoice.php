<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ip_invoices';

    public function items()
    {
        return $this->hasMany('App\Models\InvoiceItem', 'invoice_id', 'invoice_id');
    }

    public function amount()
    {
        return $this->hasOne('App\Models\InvoiceAmount','invoice_id', 'invoice_id');
    }

    public function tax_rate()
    {
        return $this->hasMany('App\Models\InvoiceTaxRate','invoice_id','invoice_id');
    }

}