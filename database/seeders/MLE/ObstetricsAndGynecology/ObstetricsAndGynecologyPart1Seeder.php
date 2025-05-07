<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart1Seeder extends Seeder
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

// 1
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'What is the recommended timing for the first antenatal visit in a low-risk pregnancy?',
  'choices'     => json_encode([
    'Before 12 weeks gestation',
    '20–24 weeks gestation',
    '28–32 weeks gestation',
    'After 36 weeks gestation',
  ]),
  'answer'      => 'Before 12 weeks gestation',
  'explanation' => 'Early booking before 12 weeks allows timely risk assessment and initiation of preventive interventions.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which immunization is routinely given during pregnancy to prevent neonatal tetanus?',
  'choices'     => json_encode([
    'Tetanus toxoid',
    'Influenza vaccine',
    'Hepatitis B vaccine',
    'Varicella vaccine',
  ]),
  'answer'      => 'Tetanus toxoid',
  'explanation' => 'Tetanus toxoid vaccination reduces the risk of maternal and neonatal tetanus when administered in pregnancy.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which sign is NOT a danger sign in pregnancy requiring immediate referral?',
  'choices'     => json_encode([
    'Blurred vision',
    'Persistent headache',
    'Mild ankle swelling',
    'Vaginal bleeding',
  ]),
  'answer'      => 'Mild ankle swelling',
  'explanation' => 'Mild ankle swelling is common; severe swelling with headache/visual changes is concerning.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'The purpose of the partograph is to:',
  'choices'     => json_encode([
    'Monitor labor progress and identify abnormalities',
    'Assess fetal lung maturity',
    'Evaluate maternal nutritional status',
    'Record antenatal visits',
  ]),
  'answer'      => 'Monitor labor progress and identify abnormalities',
  'explanation' => 'Partograph graphs cervical dilation, descent, and vital signs to detect dystocia early.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which intervention is part of active management of the third stage of labor (AMTSL)?',
  'choices'     => json_encode([
    'Oxytocin administration',
    'Maternal fasting',
    'Routine episiotomy',
    'Prolonged cord traction',
  ]),
  'answer'      => 'Oxytocin administration',
  'explanation' => 'Oxytocin given immediately after birth reduces postpartum hemorrhage risk.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'What is the normal range for fetal heart rate in labor?',
  'choices'     => json_encode([
    '110–160 beats per minute',
    '80–100 beats per minute',
    '170–200 beats per minute',
    '60–80 beats per minute',
  ]),
  'answer'      => '110–160 beats per minute',
  'explanation' => 'Normal fetal heart rate ranges between 110 and 160 bpm; deviations warrant assessment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which condition is defined by hypertension and proteinuria after 20 weeks gestation?',
  'choices'     => json_encode([
    'Preeclampsia',
    'Eclampsia',
    'Gestational diabetes',
    'Hyperemesis gravidarum',
  ]),
  'answer'      => 'Preeclampsia',
  'explanation' => 'Preeclampsia is new-onset hypertension with proteinuria after 20 weeks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'The first-line medication for eclamptic seizures is:',
  'choices'     => json_encode([
    'Magnesium sulfate',
    'Diazepam',
    'Hydralazine',
    'Labetalol',
  ]),
  'answer'      => 'Magnesium sulfate',
  'explanation' => 'Magnesium sulfate is the anticonvulsant of choice in eclampsia management.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'What immediate care should be provided to a newborn in the first minute?',
  'choices'     => json_encode([
    'Dry, warm, and stimulate baby',
    'Bath with antiseptic',
    'Administer Vitamin K',
    'Initiate breastfeeding',
  ]),
  'answer'      => 'Dry, warm, and stimulate baby',
  'explanation' => 'Thermal care and stimulation help establish breathing and prevent hypothermia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which scale assesses newborn adaptation at 1 and 5 minutes after birth?',
  'choices'     => json_encode([
    'APGAR score',
    'Ballard score',
    'New Ballard score',
    'Dubowitz score',
  ]),
  'answer'      => 'APGAR score',
  'explanation' => 'APGAR evaluates appearance, pulse, grimace, activity, and respiration.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'The most common cause of primary postpartum hemorrhage is:',
  'choices'     => json_encode([
    'Uterine atony',
    'Vaginal laceration',
    'Retained placenta',
    'Coagulation disorder',
  ]),
  'answer'      => 'Uterine atony',
  'explanation' => 'Uterine atony accounts for the majority of PPH due to failure of uterine contraction.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which fundal height measurement is expected at 28 weeks gestation?',
  'choices'     => json_encode([
    '28 cm',
    '24 cm',
    '32 cm',
    '36 cm',
  ]),
  'answer'      => '28 cm',
  'explanation' => 'Fundal height in cm approximates gestational age after 20 weeks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which symptom is most characteristic of placental abruption?',
  'choices'     => json_encode([
    'Painful bleeding',
    'Painless bleeding',
    'Itching',
    'Headache',
  ]),
  'answer'      => 'Painful bleeding',
  'explanation' => 'Abruption often presents with sudden abdominal pain and uterine tenderness along with bleeding.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which test screens for gestational diabetes between 24 and 28 weeks?',
  'choices'     => json_encode([
    'Oral glucose tolerance test',
    'Random blood sugar test',
    'Hemoglobin A1c',
    'Fasting lipid profile',
  ]),
  'answer'      => 'Oral glucose tolerance test',
  'explanation' => 'OGTT is the standard screening for gestational diabetes in the second trimester.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which is the hormone responsible for cervical ripening in labor?',
  'choices'     => json_encode([
    'Prostaglandins',
    'Estrogen',
    'Progesterone',
    'Oxytocin',
  ]),
  'answer'      => 'Prostaglandins',
  'explanation' => 'Prostaglandins soften and dilate the cervix in preparation for labor.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'When counseling on breastfeeding, the Midwife should recommend:',
  'choices'     => json_encode([
    'Exclusive breastfeeding for 6 months',
    'Supplementary feeding from birth',
    'Formula feeding only',
    'Juice supplementation at 2 months',
  ]),
  'answer'      => 'Exclusive breastfeeding for 6 months',
  'explanation' => 'WHO recommends exclusive breastfeeding for the first 6 months of life.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which pelvic shape is most favorable for vaginal delivery?',
  'choices'     => json_encode([
    'Gynecoid',
    'Android',
    'Anthropoid',
    'Platypelloid',
  ]),
  'answer'      => 'Gynecoid',
  'explanation' => 'The gynecoid pelvis is rounded and most conducive to vaginal birth.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which condition is characterized by absence of menses for 6 months after delivery?',
  'choices'     => json_encode([
    'Lactational amenorrhea',
    'Polycystic ovary syndrome',
    'Premature ovarian failure',
    'Menopause',
  ]),
  'answer'      => 'Lactational amenorrhea',
  'explanation' => 'Breastfeeding-induced amenorrhea can occur postpartum and act as natural contraception.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which maneuver is used to relieve cord prolapse if immediate delivery is delayed?',
  'choices'     => json_encode([
    'Manual elevation of presenting part',
    'McRoberts maneuver',
    'Kristeller maneuver',
    'Gaskin maneuver',
  ]),
  'answer'      => 'Manual elevation of presenting part',
  'explanation' => 'Elevating the fetal head relieves pressure on the cord until cesarean section.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 1,
  'question'    => 'Which antibiotic is recommended for Group B Streptococcus prophylaxis during labor?',
  'choices'     => json_encode([
    'Penicillin G',
    'Ampicillin',
    'Clindamycin',
    'Vancomycin',
  ]),
  'answer'      => 'Penicillin G',
  'explanation' => 'Penicillin G is the first-line intrapartum prophylaxis to prevent neonatal GBS infection.',
  'created_at'  => $now,
  'updated_at'  => $now,
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
