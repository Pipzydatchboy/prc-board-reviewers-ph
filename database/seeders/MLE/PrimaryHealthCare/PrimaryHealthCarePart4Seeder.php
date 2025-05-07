<?php

namespace Database\Seeders\MLE\PrimaryHealthCare;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PrimaryHealthCarePart4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

//Questions Starts here... 
$batch = [];
$batch = [
    //1
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "What is the standard sodium concentration of WHO-recommended Oral Rehydration Solution (ORS)?",
        'choices'     => json_encode([
            '75 mmol/L',
            '45 mmol/L',
            '100 mmol/L',
            '120 mmol/L',
        ]),
        'answer'      => '75 mmol/L',
        'explanation' => 'WHO-ORS contains 75 mmol/L sodium to maximize rehydration and minimize stool output.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which bleach dosage is recommended for household water chlorination?",
        'choices'     => json_encode([
            '2 drops of 5% bleach per liter',
            '10 drops of 1% bleach per liter',
            '1 ml of 10% bleach per liter',
            '5 drops of 2% bleach per liter',
        ]),
        'answer'      => '2 drops of 5% bleach per liter',
        'explanation' => 'Two drops of 5% bleach per liter provide effective disinfection with safe residual chlorine.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which indicator measures access to improved sanitation facilities?",
        'choices'     => json_encode([
            'Proportion of households with improved latrines',
            'Number of water sources',
            'Volume of wastewater treated',
            'Reports of open defecation only',
        ]),
        'answer'      => 'Proportion of households with improved latrines',
        'explanation' => 'This indicator reflects household access to facilities that hygienically separate excreta from human contact.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "What is the minimum number of tetanus toxoid (TT) doses recommended during pregnancy?",
        'choices'     => json_encode([
            '2 doses',
            '1 dose',
            '3 doses',
            '5 doses',
        ]),
        'answer'      => '2 doses',
        'explanation' => 'Two TT doses during pregnancy provide adequate maternal and neonatal protection against tetanus.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which prophylactic injection is given to newborns at birth to prevent hemorrhagic disease?",
        'choices'     => json_encode([
            'Vitamin K',
            'Vitamin A',
            'Hepatitis B vaccine',
            'BCG vaccine',
        ]),
        'answer'      => 'Vitamin K',
        'explanation' => 'Vitamin K injection prevents vitamin K deficiency bleeding in the newborn period.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "At what age is the measles vaccine typically administered in PHC schedules?",
        'choices'     => json_encode([
            '9 months',
            '6 months',
            '12 months',
            '15 months',
        ]),
        'answer'      => '9 months',
        'explanation' => 'The first dose of measles vaccine is recommended at 9 months to protect infants during early life.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which contraceptive method is classified as a long-acting reversible contraceptive (LARC)?",
        'choices'     => json_encode([
            'Copper intrauterine device (IUD)',
            'Daily oral contraceptive',
            'Monthly injectable',
            'Condom',
        ]),
        'answer'      => 'Copper intrauterine device (IUD)',
        'explanation' => 'Copper IUDs provide effective long-term contraception and are reversible upon removal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "What does the acronym 'CCM' stand for in community health programs?",
        'choices'     => json_encode([
            'Community Case Management',
            'Comprehensive Care Model',
            'Clinical Care Manual',
            'Child Care Mandate',
        ]),
        'answer'      => 'Community Case Management',
        'explanation' => 'CCM refers to integrated community-based management of common childhood illnesses.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which measurement is used to identify severe acute malnutrition in children?",
        'choices'     => json_encode([
            'Mid-upper arm circumference <115 mm',
            'Height-for-age z-score < -2',
            'Weight-for-age z-score < -1',
            'Head circumference <2nd percentile',
        ]),
        'answer'      => 'Mid-upper arm circumference <115 mm',
        'explanation' => 'MUAC <115 mm is a rapid screening tool for severe acute malnutrition in children 6–59 months.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "What is the WHO-recommended vitamin A dose for infants aged 6–11 months?",
        'choices'     => json_encode([
            '100,000 IU',
            '200,000 IU',
            '50,000 IU',
            '400,000 IU',
        ]),
        'answer'      => '100,000 IU',
        'explanation' => 'A single dose of 100,000 IU vitamin A is recommended to prevent deficiency and reduce morbidity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which indicator tracks exclusive breastfeeding rates in infants up to 6 months?",
        'choices'     => json_encode([
            'Proportion of infants exclusively breastfed at 6 months',
            'Number of nursing sessions per day',
            'Volume of expressed milk',
            'Weight gain velocity',
        ]),
        'answer'      => 'Proportion of infants exclusively breastfed at 6 months',
        'explanation' => 'This coverage indicator reflects adherence to recommended breastfeeding practices.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "What daily iron and folic acid supplementation is recommended for pregnant women?",
        'choices'     => json_encode([
            '60 mg iron + 400 µg folic acid',
            '30 mg iron + 200 µg folic acid',
            '100 mg iron + 500 µg folic acid',
            '20 mg iron + 100 µg folic acid',
        ]),
        'answer'      => '60 mg iron + 400 µg folic acid',
        'explanation' => 'This regimen prevents maternal anemia and neural tube defects.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "What is the minimum recommended interval between births to reduce maternal and infant risks?",
        'choices'     => json_encode([
            '24 months',
            '12 months',
            '6 months',
            '36 months',
        ]),
        'answer'      => '24 months',
        'explanation' => 'An interval of at least 24 months between births lowers risks of adverse outcomes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which approach is central to Community-Led Total Sanitation (CLTS)?",
        'choices'     => json_encode([
            'Triggering collective behavior change to end open defecation',
            'Providing free latrine slabs',
            'Subsidizing sanitation hardware only',
            'Enforcing sanctions on households',
        ]),
        'answer'      => 'Triggering collective behavior change to end open defecation',
        'explanation' => 'CLTS mobilizes communities to assess sanitation practices and take action collectively.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which household water treatment method is WHO-recommended besides chlorination?",
        'choices'     => json_encode([
            'Boiling for at least one minute',
            'Settling only',
            'Using untreated river water',
            'Filtering through cloth only',
        ]),
        'answer'      => 'Boiling for at least one minute',
        'explanation' => 'Boiling water for at least one minute effectively kills pathogens.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which hand hygiene practice is most effective at PHC level to prevent diarrheal diseases?",
        'choices'     => json_encode([
            'Handwashing with soap and water',
            'Rinsing with water only',
            'Using hand sanitizer rarely',
            'Wearing gloves always',
        ]),
        'answer'      => 'Handwashing with soap and water',
        'explanation' => 'Washing hands with soap removes pathogens and prevents diarrheal and respiratory infections.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which intervention uses insecticide-treated nets at community level?",
        'choices'     => json_encode([
            'Malaria prevention',
            'TB control',
            'HIV prevention',
            'Cholera outbreak response',
        ]),
        'answer'      => 'Malaria prevention',
        'explanation' => 'ITNs reduce mosquito bites and malaria transmission in endemic areas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which action is part of active management of the third stage of labor (AMTSL)?",
        'choices'     => json_encode([
            'Administering oxytocin immediately after birth',
            'Routine episiotomy only',
            'Leaving placenta to deliver spontaneously without intervention',
            'Early clamping without uterotonic',
        ]),
        'answer'      => 'Administering oxytocin immediately after birth',
        'explanation' => 'AMTSL with oxytocin reduces postpartum hemorrhage risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which financing mechanism involves prepayment through payroll deductions or premiums?",
        'choices'     => json_encode([
            'Social health insurance',
            'User fees at point of service',
            'Philanthropic donations',
            'Out-of-pocket payment',
        ]),
        'answer'      => 'Social health insurance',
        'explanation' => 'Social health insurance pools risk and ensures sustainable financing for PHC.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 30,
        'part'        => 4,
        'question'    => "Which criteria guide selection of essential medicines in PHC?",
        'choices'     => json_encode([
            'Efficacy, safety, cost-effectiveness, and public health relevance',
            'Popularity among patients',
            'Highest profit margin',
            'Only brand-name drugs',
        ]),
        'answer'      => 'Efficacy, safety, cost-effectiveness, and public health relevance',
        'explanation' => 'Essential medicines are selected based on these criteria to address priority health needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
];


        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
