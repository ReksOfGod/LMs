<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
//$faker = Faker\Factory::create('en_US');//English Faker

$factory->define(App\bank_accounts::class, function (Faker $faker) {
    return [
        'accountNumber' => $faker->numberBetween($min = 200000, $max = 200000000),
        'accountName/title' => $faker->name,
        'bankBranch' => $faker->city,
        'bankName'=> $faker->randomElement(['Jesus', 'Reks','Gift']),
    ];
});

$factory->define(App\member::class, function (Faker $faker) {
    return [
        'fname'=> $faker->firstName($gender = null|'male'|'female'),
        'lname'=> $faker->lastName,
        'dateOfBirth'=> $faker->date($format = 'd-m-Y', $max = '1992'),
        'homePhoneNumber'=> $faker->e164PhoneNumber,
        'mobilePhoneNumber'=> $faker->e164PhoneNumber,
        'employmentStatus'=> $faker->randomElement(['Contract', 'Permanent']),
        'postionHeld'=> $faker->jobTitle,
        'contractEnd'=> $faker->date($format = 'd-m-Y', $max = 'now'),
    ];
});

$factory->define(App\loan::class, function (Faker $faker) {
    return [
        'amount'=> $faker->numberBetween($min = 200000, $max = 200000000),
        'loantype'=> $faker->randomElement(['DEVELOPMENT/EMMERGENCY/SHARE','OPEN FINANCE / BUYOUT','Quick Loan']),
        'processCharge'=> $faker->randomElement(['20000', '10000']),
        'interestRate'=> $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 99.99),
        'monthlyInstallments'=> $faker->numberBetween($min = 2, $max = 10),
        'monthlyPayments'=> $faker->numberBetween($min = 20000, $max = 20000000),
        'insuranceCharge'=> $faker->numberBetween($min = 20000, $max = 2000000),
        'shareContribution'=> $faker->numberBetween($min = 40000, $max = 40000000),
    ];
});

$factory->define(App\guarantor::class, function (Faker $faker) {
    return [
        'fname'=> $faker->firstName($gender = null|'male'|'female'),
        'lname'=> $faker->lastName,
        'homePhoneNumber'=> $faker->e164PhoneNumber,
        'mobilePhoneNumber'=> $faker->e164PhoneNumber,
    ];
});

$factory->define(App\disbursement::class, function (Faker $faker) {
    return [
        'amount'=>$faker->numberBetween($min = 20000, $max = 20000000),
    ];
});

$factory->define(App\income_and_expenditure::class, function (Faker $faker) {
    return [
        'monthlyConsolidatedPay'=> $faker->numberBetween($min = 2000000, $max = 20000000),
        'otherIncome'=> $faker->numberBetween($min = 0, $max = 20000000),
        'monthlyExpenditure'=> $faker ->numberBetween($min = 20000, $max = 20000000),
        'otherMonthlyloanRepayments'=> $faker ->numberBetween($min =0, $max = 20000000),
    ];
});

$factory->define(App\loan_repayments::class, function (Faker $faker) {
    return [
        'outstandingAmount'=> $faker ->numberBetween($min = 0, $max = 20000000),
        'portfolioAtRisk'=> $faker ->numberBetween($min = 0, $max = 20000000),
        'amountInDefault'=> $faker ->numberBetween($min = 0, $max = 20000000),
        'paymentDueDate'=> $faker->date($format = 'd-m-Y', $max = 'now'),
    ];
});