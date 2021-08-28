<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

//Model represents recipient of contact form.
class Recipient extends Model {
    use Notifiable;

    protected $name;
    protected $email;

    public function __construct() {
        $this->name = config('recipient.name');
        $this->email = config('recipient.email');//Defined in .env file. To be changed in production to guibert.tulpinck@gmail.com.
    }
}
