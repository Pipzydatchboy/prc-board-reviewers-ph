<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart4Seeder extends Seeder
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
  'part'        => 4,
  'question'    => 'At what gestational age is external cephalic version typically performed for breech presentation?',
  'choices'     => json_encode([
    '37 weeks',
    '32 weeks',
    '40 weeks',
    '42 weeks',
  ]),
  'answer'      => '37 weeks',
  'explanation' => 'EVC is usually attempted between 36 and 38 weeks to allow spontaneous version and minimize preterm labor.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Which condition is an absolute contraindication to external cephalic version?',
  'choices'     => json_encode([
    'Placenta previa',
    'Breech presentation',
    'Multiparity',
    'Oligohydramnios',
  ]),
  'answer'      => 'Placenta previa',
  'explanation' => 'Placenta previa over the cervical os poses a high risk of hemorrhage with EVC.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'A reactive nonstress test is defined by at least how many accelerations in 20 minutes?',
  'choices'     => json_encode([
    '2',
    '1',
    '3',
    '4',
  ]),
  'answer'      => '2',
  'explanation' => 'A reactive NST shows ≥2 accelerations of 15 bpm lasting ≥15 seconds in 20 minutes in term fetuses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Which of the following is NOT a component of the biophysical profile (BPP)?',
  'choices'     => json_encode([
    'Cord blood gas',
    'Fetal breathing movements',
    'Amniotic fluid volume',
    'Fetal tone',
  ]),
  'answer'      => 'Cord blood gas',
  'explanation' => 'BPP includes NST, fetal breathing, movement, tone, and amniotic fluid; cord blood gas is post-delivery test.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'What is the normal range for amniotic fluid index (AFI)?',
  'choices'     => json_encode([
    '5–25 cm',
    '1–5 cm',
    '25–35 cm',
    '35–45 cm',
  ]),
  'answer'      => '5–25 cm',
  'explanation' => 'An AFI between 5 and 25 cm is considered normal; values outside suggest oligo- or polyhydramnios.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Which management is recommended for oligohydramnios at term?',
  'choices'     => json_encode([
    'Induction of labor',
    'Amnioinfusion',
    'Expectant management until 42 weeks',
    'Bed rest only',
  ]),
  'answer'      => 'Induction of labor',
  'explanation' => 'At term with low fluid, induction may reduce risks of cord compression and fetal distress.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Which intervention may be used to manage severe polyhydramnios?',
  'choices'     => json_encode([
    'Amnioreduction',
    'Oral hypotonic fluids',
    'Delayed delivery until 42 weeks',
    'Bed rest with no fluid restriction',
  ]),
  'answer'      => 'Amnioreduction',
  'explanation' => 'Therapeutic removal of excess fluid via amniocentesis can relieve symptoms and reduce risks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Monochorionic diamniotic twin pregnancies share what structure?',
  'choices'     => json_encode([
    'Placenta',
    'Yolk sac',
    'Amniotic sac',
    'Chorionic sac only',
  ]),
  'answer'      => 'Placenta',
  'explanation' => 'Monochorionic twins share one placenta but have two amniotic sacs, raising TTTS risk.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Twin-to-twin transfusion syndrome occurs in which type of twin pregnancy?',
  'choices'     => json_encode([
    'Monochorionic',
    'Dichorionic',
    'Dizygotic',
    'Diamniotic dichorionic',
  ]),
  'answer'      => 'Monochorionic',
  'explanation' => 'TTTS arises from shared vascular connections in monochorionic placentas leading to imbalanced blood flow.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'A biophysical profile score of 4/10 indicates:',
  'choices'     => json_encode([
    'Immediate delivery',
    'Continue monitoring',
    'Normal fetal health',
    'No further action',
  ]),
  'answer'      => 'Immediate delivery',
  'explanation' => 'A low BPP (<6) suggests compromised fetus and may require prompt delivery, depending on gestation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Post-term pregnancy is defined as ≥',
  'choices'     => json_encode([
    '42 weeks gestation',
    '40 weeks gestation',
    '41 weeks gestation',
    '39 weeks gestation',
  ]),
  'answer'      => '42 weeks gestation',
  'explanation' => 'Post-term is ≥42 weeks, associated with higher perinatal risks prompting surveillance or induction.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Which condition is characterized by sudden cardiovascular collapse and DIC in labor?',
  'choices'     => json_encode([
    'Amniotic fluid embolism',
    'PVC development',
    'Eclampsia',
    'Pulmonary embolism',
  ]),
  'answer'      => 'Amniotic fluid embolism',
  'explanation' => 'AFE triggers anaphylactoid reaction causing respiratory distress, hypotension, and coagulopathy.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'First-line management for suspected amniotic fluid embolism includes:',
  'choices'     => json_encode([
    'Supportive care with oxygen and hemodynamic support',
    'Immediate cesarean section only',
    'High-dose steroids',
    'IV magnesium sulfate',
  ]),
  'answer'      => 'Supportive care with oxygen and hemodynamic support',
  'explanation' => 'Management is primarily supportive: respiratory, circulatory stabilization and DIC correction.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Outlet forceps application requires fetal head at least at station',
  'choices'     => json_encode([
    '+2 station',
    '0 station',
    '+1 station',
    '-1 station',
  ]),
  'answer'      => '+2 station',
  'explanation' => 'Outlet forceps are used when the fetal head is on the perineum at +2 or +3 station.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'A mid-forceps delivery is indicated when fetal head is at station',
  'choices'     => json_encode([
    '+1 to +2',
    '0',
    '-1 to 0',
    '+3 only',
  ]),
  'answer'      => '+1 to +2',
  'explanation' => 'Mid-forceps are applied when the head is engaged but above the perineum between +2 and +1 stations.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Vacuum extraction is contraindicated before',
  'choices'     => json_encode([
    '34 weeks gestation',
    '37 weeks gestation',
    '40 weeks gestation',
    '42 weeks gestation',
  ]),
  'answer'      => '34 weeks gestation',
  'explanation' => 'Prior to 34 weeks, the fetal skull may be too soft, increasing risk of injury with vacuum.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Which episiotomy type reduces extension into the anal sphincter?',
  'choices'     => json_encode([
    'Mediolateral episiotomy',
    'Midline episiotomy',
    'Posterior episiotomy',
    'Anterior episiotomy',
  ]),
  'answer'      => 'Mediolateral episiotomy',
  'explanation' => 'Mediolateral incisions at 45° angle reduce risk of third- and fourth-degree tears.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Leopold maneuver: the second maneuver palpates the',
  'choices'     => json_encode([
    'Fetal back',
    'Fetal head',
    'Fetal buttocks',
    'Umbilical cord',
  ]),
  'answer'      => 'Fetal back',
  'explanation' => 'The second maneuver identifies the location of the fetal back and small parts on the opposite side.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Intermittent auscultation with a handheld Doppler exemplifies',
  'choices'     => json_encode([
    'Intermittent fetal heart rate monitoring',
    'Continuous CTG monitoring',
    'Biophysical profiling',
    'Fetal scalp blood sampling',
  ]),
  'answer'      => 'Intermittent fetal heart rate monitoring',
  'explanation' => 'Handheld Doppler periodically checks FHR without continuous electronic monitoring.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 4,
  'question'    => 'Continuous cardiotocography primarily assesses',
  'choices'     => json_encode([
    'Fetal heart rate and uterine contractions',
    'Amniotic fluid volume',
    'Maternal blood pressure',
    'Cervical dilation',
  ]),
  'answer'      => 'Fetal heart rate and uterine contractions',
  'explanation' => 'CTG records FHR patterns in relation to contractions to detect distress.',
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
