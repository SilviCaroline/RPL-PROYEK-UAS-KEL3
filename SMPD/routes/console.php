<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('loan:reminder')->daily();
