<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart9Seeder extends Seeder
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
  'part'        => 9,
  'question'    => 'Which anesthetic technique is preferred for cesarean delivery to minimize fetal drug exposure?',
  'choices'     => json_encode([
    'Spinal anesthesia',
    'General anesthesia',
    'Local infiltration',
    'IV sedation',
  ]),
  'answer'      => 'Spinal anesthesia',
  'explanation' => 'Spinal anesthesia provides rapid onset, effective analgesia, and limited placental transfer compared to general anesthesia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'What is the maximum recommended dose of lidocaine without epinephrine for pudendal nerve block?',
  'choices'     => json_encode([
    '300 mg',
    '100 mg',
    '500 mg',
    '50 mg',
  ]),
  'answer'      => '300 mg',
  'explanation' => 'The maximum safe dose of lidocaine without epinephrine is 4.5 mg/kg; for a 70 kg patient, approximately 300 mg.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which complication is most associated with epidural anesthesia in labor?',
  'choices'     => json_encode([
    'Hypotension',
    'Hypertension',
    'Hyperthermia',
    'Hypoglycemia',
  ]),
  'answer'      => 'Hypotension',
  'explanation' => 'Sympathetic blockade from epidural can cause decreased vascular tone and maternal hypotension.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which local anesthetic addition prolongs duration and reduces systemic absorption in spinal anesthesia?',
  'choices'     => json_encode([
    'Fentanyl',
    'Bupivacaine',
    'Tetracaine',
    'Morphine',
  ]),
  'answer'      => 'Fentanyl',
  'explanation' => 'Opioid adjuncts like fentanyl added to local anesthetics improve analgesia duration and quality.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'During general anesthesia for obstetric surgery, which agent is preferred for rapid induction and minimal fetal depression?',
  'choices'     => json_encode([
    'Propofol',
    'Thiopental',
    'Ketamine',
    'Etomidate',
  ]),
  'answer'      => 'Thiopental',
  'explanation' => 'Thiopental induces anesthesia rapidly and crosses placenta quickly, minimizing fetal exposure time.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which monitoring parameter is essential during obstetric epidural placement?',
  'choices'     => json_encode([
    'Blood pressure',
    'Blood glucose',
    'Core temperature',
    'Arterial blood gas',
  ]),
  'answer'      => 'Blood pressure',
  'explanation' => 'Continuous BP monitoring detects hypotension, a common side effect of epidural anesthesia.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'What is the primary indication for diagnostic laparoscopy in suspected ovarian torsion?',
  'choices'     => json_encode([
    'Acute unilateral pelvic pain',
    'Chronic pelvic pain',
    'Abnormal uterine bleeding',
    'Polycystic ovarian morphology',
  ]),
  'answer'      => 'Acute unilateral pelvic pain',
  'explanation' => 'Sudden onset severe pain and ultrasound findings of torsion necessitate prompt laparoscopy to salvage the ovary.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which procedure uses carbon dioxide distension for evaluation of uterine cavity abnormalities?',
  'choices'     => json_encode([
    'Hysteroscopy',
    'Colposcopy',
    'Laparoscopy',
    'Cystoscopy',
  ]),
  'answer'      => 'Hysteroscopy',
  'explanation' => 'Hysteroscopy allows direct visualization of the endometrial cavity using CO2 or fluid distension.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'LEEP is primarily indicated for treatment of which cervical lesion?',
  'choices'     => json_encode([
    'Cervical intraepithelial neoplasia 2',
    'Polyps',
    'Ectropion',
    'Endometrial hyperplasia',
  ]),
  'answer'      => 'Cervical intraepithelial neoplasia 2',
  'explanation' => 'LEEP excises dysplastic cervical tissue, indicated for CIN 2 and 3 lesions.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which method is used to assess endometrial hyperplasia in abnormal uterine bleeding?',
  'choices'     => json_encode([
    'Dilation and curettage',
    'Endometrial ablation',
    'Hysteroscopic myomectomy',
    'Uterine artery embolization',
  ]),
  'answer'      => 'Dilation and curettage',
  'explanation' => 'D&amp;C provides tissue for histologic evaluation of endometrial pathology.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which minimally invasive procedure is used to treat symptomatic submucosal fibroids?',
  'choices'     => json_encode([
    'Hysteroscopic myomectomy',
    'Abdominal hysterectomy',
    'Vaginal hysterectomy',
    'Laparotomy',
  ]),
  'answer'      => 'Hysteroscopic myomectomy',
  'explanation' => 'Resection of fibroids via hysteroscope relieves bleeding and preserves fertility.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Uterine artery embolization is contraindicated in which scenario?',
  'choices'     => json_encode([
    'Desire for future fertility',
    'Symptomatic fibroids',
    'Menorrhagia',
    'Anemia',
  ]),
  'answer'      => 'Desire for future fertility',
  'explanation' => 'Embolization may impair uterine blood flow, affecting ovarian reserve and future pregnancy.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which sign on laparoscopy indicates endometriosis implants?',
  'choices'     => json_encode([
    'Powder-burn lesions',
    'White striations',
    'Blueberry spots',
    'All of the above',
  ]),
  'answer'      => 'All of the above',
  'explanation' => 'Endometriotic lesions appear as powder-burn, white, or blue discoloration on peritoneum.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which hormone is measured in serum to confirm ovulation in infertility evaluation?',
  'choices'     => json_encode([
    'Progesterone',
    'LH',
    'FSH',
    'Estrogen',
  ]),
  'answer'      => 'Progesterone',
  'explanation' => 'Mid-luteal serum progesterone >3 ng/mL indicates ovulation has occurred.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which adenoma-associated polyp type has the highest malignant potential?',
  'choices'     => json_encode([
    'Villous adenoma',
    'Hyperplastic polyp',
    'Inflammatory polyp',
    'Hamartomatous polyp',
  ]),
  'answer'      => 'Villous adenoma',
  'explanation' => 'Villous histology and size correlate with increased risk for malignant transformation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which condition is prevented by Rh immunoglobulin administration postpartum?',
  'choices'     => json_encode([
    'Hemolytic disease of the newborn',
    'Physiologic jaundice',
    'Neonatal sepsis',
    'Neonatal hypoglycemia',
  ]),
  'answer'      => 'Hemolytic disease of the newborn',
  'explanation' => 'Anti-D immunoglobulin prevents maternal sensitization and subsequent alloimmune hemolysis.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which factor is NOT part of the modified Bishop score for induction readiness?',
  'choices'     => json_encode([
    'Fetal station',
    'Cervical effacement',
    'Maternal age',
    'Cervical consistency',
  ]),
  'answer'      => 'Maternal age',
  'explanation' => 'Bishop includes dilation, effacement, station, consistency, and position, not maternal age.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which uterine contraction pattern on CTG indicates hyperstimulation?',
  'choices'     => json_encode([
    'More than 5 contractions in 10 minutes',
    '10 minutes with no contractions',
    'Regular contractions every 5 minutes',
    'One contraction per 10 minutes',
  ]),
  'answer'      => 'More than 5 contractions in 10 minutes',
  'explanation' => 'Uterine tachysystole may compromise fetal oxygenation and requires management.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which lab result is diagnostic of gestational thrombocytopenia?',
  'choices'     => json_encode([
    'Platelet count 100,000–150,000/µL',
    'Platelet count >200,000/µL',
    'Platelet count <50,000/µL',
    'Platelet count 150,000–300,000/µL',
  ]),
  'answer'      => 'Platelet count 100,000–150,000/µL',
  'explanation' => 'Gestational thrombocytopenia causes mild decreases; counts rarely below 100,000.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 9,
  'question'    => 'Which postpartum analgesic is preferred for breastfeeding mothers?',
  'choices'     => json_encode([
    'Ibuprofen',
    'Codeine',
    'Aspirin',
    'Warfarin',
  ]),
  'answer'      => 'Ibuprofen',
  'explanation' => 'NSAIDs like ibuprofen are safe in lactation and effective for postpartum pain control.',
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
            $this->command->warn("Part 9 as only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
