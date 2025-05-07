<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart3Seeder extends Seeder
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
  'part'        => 3,
  'question'    => 'What is the first-line management for uterine atony postpartum?',
  'choices'     => json_encode([
    'Fundal massage',
    'Oxytocin infusion',
    'Tranexamic acid',
    'Manual removal of placenta',
  ]),
  'answer'      => 'Fundal massage',
  'explanation' => 'Fundal massage stimulates uterine contraction to reduce bleeding in uterine atony.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which of the following is NOT one of the 4 Ts of postpartum hemorrhage?',
  'choices'     => json_encode([
    'Traction',
    'Tone',
    'Thrombin',
    'Tissue',
  ]),
  'answer'      => 'Thrombin',
  'explanation' => 'The 4 Ts are Tone, Tissue, Trauma, and Thrombin (coagulopathy is sometimes included but “Thrombin” alone is not).',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which indication warrants manual removal of the placenta?',
  'choices'     => json_encode([
    'Placental retention beyond 30 minutes',
    'Lochia alba',
    'Acute uterine inversion',
    'Fundal height at umbilicus',
  ]),
  'answer'      => 'Placental retention beyond 30 minutes',
  'explanation' => 'Manual removal is indicated when the placenta is not delivered within 30 minutes to prevent hemorrhage and infection.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Lochia progresses through which sequence postpartum?',
  'choices'     => json_encode([
    'Rubra → Serosa → Alba',
    'Alba → Serosa → Rubra',
    'Serosa → Rubra → Alba',
    'Serosa → Alba → Rubra',
  ]),
  'answer'      => 'Rubra → Serosa → Alba',
  'explanation' => 'Lochia changes from red (rubra) to pinkish (serosa) to white/yellow (alba) over weeks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'What is the normal duration of lochia rubra?',
  'choices'     => json_encode([
    '3–5 days',
    '10–14 days',
    '21–28 days',
    'Up to 6 weeks',
  ]),
  'answer'      => '3–5 days',
  'explanation' => 'Lochia rubra typically lasts 3–5 days before transitioning to serosa.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which maneuver is used to correct acute uterine inversion?',
  'choices'     => json_encode([
    'Johnson’s maneuver',
    'McRoberts maneuver',
    'Gaskin maneuver',
    'Kristeller maneuver',
  ]),
  'answer'      => 'Johnson’s maneuver',
  'explanation' => 'Johnson’s maneuver calls for manual replacement of the inverted uterus with gentle pressure.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which is a sign of puerperal sepsis?',
  'choices'     => json_encode([
    'Fever ≥38°C on two separate occasions',
    'Lochia serosa',
    'Mild uterine cramping',
    'Anovulation',
  ]),
  'answer'      => 'Fever ≥38°C on two separate occasions',
  'explanation' => 'Persistent fever postpartum suggests infection requiring investigation and treatment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which antibiotic regimen is first-line for postpartum endometritis?',
  'choices'     => json_encode([
    'Clindamycin with gentamicin',
    'Ampicillin only',
    'Ceftriaxone only',
    'Metronidazole only',
  ]),
  'answer'      => 'Clindamycin with gentamicin',
  'explanation' => 'Combined coverage of anaerobes and gram-negatives is required in endometritis.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'What is the recommended caloric increase for breastfeeding mothers?',
  'choices'     => json_encode([
    '+450 calories/day',
    '+250 calories/day',
    '+100 calories/day',
    'No additional calories',
  ]),
  'answer'      => '+450 calories/day',
  'explanation' => 'Lactating women require approximately 450–500 extra kcal per day to support milk production.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which scale differentiates baby blues from postpartum depression?',
  'choices'     => json_encode([
    'Edinburgh Postnatal Depression Scale',
    'APGAR score',
    'Bishop score',
    'Glasgow Coma Scale',
  ]),
  'answer'      => 'Edinburgh Postnatal Depression Scale',
  'explanation' => 'EPDS is a validated screening tool for postpartum depression in the first year.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which degree of perineal laceration involves the anal sphincter?',
  'choices'     => json_encode([
    'Third degree',
    'First degree',
    'Second degree',
    'Fourth degree',
  ]),
  'answer'      => 'Third degree',
  'explanation' => 'Third-degree tears extend into the anal sphincter muscle.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'When is postpartum IUD insertion typically recommended?',
  'choices'     => json_encode([
    '6 weeks postpartum',
    'Immediately after delivery',
    'First antenatal visit',
    'After return of menses',
  ]),
  'answer'      => '6 weeks postpartum',
  'explanation' => 'Delayed insertion at 6 weeks reduces expulsion risk and ensures uterine involution.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which exercise is recommended to strengthen pelvic floor muscles postpartum?',
  'choices'     => json_encode([
    'Kegel exercises',
    'Squats',
    'Hamstring stretches',
    'Crunches',
  ]),
  'answer'      => 'Kegel exercises',
  'explanation' => 'Kegels improve pelvic support and reduce incontinence by contracting levator ani muscles.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'What is the purpose of the 6-week postpartum visit?',
  'choices'     => json_encode([
    'Assess recovery and plan contraceptive care',
    'Perform neonatal heel prick',
    'Administer Tdap vaccine',
    'Conduct glucose tolerance test',
  ]),
  'answer'      => 'Assess recovery and plan contraceptive care',
  'explanation' => 'The visit evaluates healing, mental health, and introduces family planning options.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which sign indicates deep vein thrombosis postpartum?',
  'choices'     => json_encode([
    'Leg swelling with pain and calf tenderness',
    'Lochia alba',
    'Fundal height > umbilicus',
    'Elevated blood pressure',
  ]),
  'answer'      => 'Leg swelling with pain and calf tenderness',
  'explanation' => 'Unilateral leg edema, pain, and tenderness suggest DVT requiring evaluation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which medication is given for postpartum thromboprophylaxis in high-risk patients?',
  'choices'     => json_encode([
    'Low molecular weight heparin',
    'Warfarin',
    'Aspirin',
    'Heparin flush',
  ]),
  'answer'      => 'Low molecular weight heparin',
  'explanation' => 'LMWH is used to prevent venous thromboembolism in postpartum women with risk factors.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which condition is characterized by prolonged, heavy vaginal bleeding beyond 4 weeks postpartum?',
  'choices'     => json_encode([
    'Subinvolution of the uterus',
    'Lochia rubra persistence',
    'Postpartum blues',
    'Uterine atony',
  ]),
  'answer'      => 'Subinvolution of the uterus',
  'explanation' => 'Subinvolution refers to failure of the uterus to return to pre-pregnancy size, causing prolonged bleeding.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which observation is normal during immediate postpartum assessment of the uterus?',
  'choices'     => json_encode([
    'Firm fundus at umbilicus level',
    'Soft boggy fundus above xiphoid',
    'Fundus displaced to right',
    'Fundus not palpable',
  ]),
  'answer'      => 'Firm fundus at umbilicus level',
  'explanation' => 'A firm fundus at the level of the umbilicus indicates proper contraction after delivery.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'Which dietary recommendation supports lactation besides caloric increase?',
  'choices'     => json_encode([
    'Adequate protein and fluid intake',
    'Low-sodium diet',
    'Gluten-free diet',
    'High-fat diet',
  ]),
  'answer'      => 'Adequate protein and fluid intake',
  'explanation' => 'Protein and hydration are critical for milk synthesis in breastfeeding mothers.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 3,
  'question'    => 'What is the best timing for routine postpartum pelvic exam?',
  'choices'     => json_encode([
    '6 weeks after delivery',
    '2 weeks after delivery',
    '2 days after delivery',
    '3 months after delivery',
  ]),
  'answer'      => '6 weeks after delivery',
  'explanation' => 'A 6-week exam assesses healing, reproductive health, and family planning needs.',
  'created_at'  => $now,
  'updated_at'  => $now
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
