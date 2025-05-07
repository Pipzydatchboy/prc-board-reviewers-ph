<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart6Seeder extends Seeder
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
  'part'        => 6,
  'question'    => 'Which contraceptive method provides immediate protection when inserted within 5 days after unprotected intercourse?',
  'choices'     => json_encode([
    'Copper IUD',
    'Levonorgestrel IUD',
    'Combined oral contraceptive',
    'Depot medroxyprogesterone',
  ]),
  'answer'      => 'Copper IUD',
  'explanation' => 'Copper IUD is the most effective emergency contraceptive when placed within 5 days post-coitus.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'What is the first-line treatment for bacterial vaginosis in pregnancy?',
  'choices'     => json_encode([
    'Oral metronidazole',
    'Topical clotrimazole',
    'Oral fluconazole',
    'Topical erythromycin',
  ]),
  'answer'      => 'Oral metronidazole',
  'explanation' => 'Metronidazole 500 mg twice daily for 7 days is recommended for BV treatment in pregnancy.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which Pap smear result requires immediate colposcopic evaluation?',
  'choices'     => json_encode([
    'High-grade squamous intraepithelial lesion',
    'Negative for intraepithelial lesion',
    'Low-grade squamous intraepithelial lesion',
    'Atypical squamous cells of undetermined significance',
  ]),
  'answer'      => 'High-grade squamous intraepithelial lesion',
  'explanation' => 'HSIL indicates significant dysplasia and warrants prompt colposcopic assessment.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which hormone level is elevated in polycystic ovary syndrome?',
  'choices'     => json_encode([
    'Androgens',
    'Estrogen',
    'Progesterone',
    'Prolactin',
  ]),
  'answer'      => 'Androgens',
  'explanation' => 'PCOS is characterized by hyperandrogenism leading to hirsutism and menstrual irregularities.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which menstrual disorder is defined by absence of menses for 3 consecutive cycles in reproductive-age women?',
  'choices'     => json_encode([
    'Secondary amenorrhea',
    'Primary amenorrhea',
    'Oligomenorrhea',
    'Menorrhagia',
  ]),
  'answer'      => 'Secondary amenorrhea',
  'explanation' => 'Secondary amenorrhea is the absence of menstruation for three or more cycles after menarche has occurred.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'First-line management for dysmenorrhea includes:',
  'choices'     => json_encode([
    'NSAIDs during menses',
    'Combined oral contraceptives',
    'Endometrial ablation',
    'Levonorgestrel IUD',
  ]),
  'answer'      => 'NSAIDs during menses',
  'explanation' => 'NSAIDs inhibit prostaglandins and are the initial therapy for primary dysmenorrhea.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which screening test is recommended annually for sexually active women under 25?',
  'choices'     => json_encode([
    'Chlamydia NAAT',
    'Pap smear',
    'Mammogram',
    'Endometrial biopsy',
  ]),
  'answer'      => 'Chlamydia NAAT',
  'explanation' => 'Annual screening for chlamydia is recommended due to high prevalence and asymptomatic nature in young women.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which sign suggests pelvic inflammatory disease on bimanual exam?',
  'choices'     => json_encode([
    'Cervical motion tenderness',
    'Uterine involution',
    'Fundal tenderness',
    'Vaginal atrophy',
  ]),
  'answer'      => 'Cervical motion tenderness',
  'explanation' => 'CMT is a hallmark of PID due to inflammation of pelvic organs and peritoneum.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which vaccine is recommended to prevent cervical cancer in adolescent girls?',
  'choices'     => json_encode([
    'HPV vaccine',
    'Tdap',
    'Flu vaccine',
    'MMR vaccine',
  ]),
  'answer'      => 'HPV vaccine',
  'explanation' => 'HPV vaccination before sexual debut protects against high-risk HPV strains causing cervical cancer.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which condition is characterized by endometrial tissue outside the uterus causing pelvic pain?',
  'choices'     => json_encode([
    'Endometriosis',
    'Fibroids',
    'Ovarian cyst',
    'PID',
  ]),
  'answer'      => 'Endometriosis',
  'explanation' => 'Endometriosis leads to cyclic pelvic pain, dysmenorrhea, and infertility due to ectopic endometrium.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which test confirms tubal patency in infertility evaluation?',
  'choices'     => json_encode([
    'Hysterosalpingogram',
    'Pelvic ultrasound',
    'Endometrial biopsy',
    'Selective vaginoscopy',
  ]),
  'answer'      => 'Hysterosalpingogram',
  'explanation' => 'HSG uses contrast radiography to visualize uterine cavity and tubal patency in infertility workup.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'First-line management for menorrhagia due to uterine fibroids is:',
  'choices'     => json_encode([
    'Tranexamic acid during menses',
    'Hysterectomy',
    'GnRH agonists chronically',
    'Iron supplements only',
  ]),
  'answer'      => 'Tranexamic acid during menses',
  'explanation' => 'Antifibrinolytics reduce menstrual blood loss in heavy bleeding conditions like fibroids.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which condition presents with cyclical breast pain and nodularity linked to menstrual cycle?',
  'choices'     => json_encode([
    'Fibrocystic breast changes',
    'Mastitis',
    'Galactocele',
    'Intraductal papilloma',
  ]),
  'answer'      => 'Fibrocystic breast changes',
  'explanation' => 'Hormonal fluctuations cause benign breast lumps and tenderness pre-menstrually.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which laboratory finding is characteristic of polycystic ovary syndrome?',
  'choices'     => json_encode([
    'LH:FSH ratio >2:1',
    'Low prolactin',
    'High progesterone',
    'Low testosterone',
  ]),
  'answer'      => 'LH:FSH ratio >2:1',
  'explanation' => 'Elevated LH relative to FSH is commonly observed in PCOS endocrine evaluation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which screening interval is recommended for women aged 30–65 with co-testing (Pap + HPV)?',
  'choices'     => json_encode([
    'Every 5 years',
    'Every 3 years',
    'Every year',
    'Every 10 years',
  ]),
  'answer'      => 'Every 5 years',
  'explanation' => 'Co-testing with Pap and HPV allows a 5-year screening interval in average-risk women.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which organism is most commonly associated with cervical cancer?',
  'choices'     => json_encode([
    'HPV 16/18',
    'Chlamydia trachomatis',
    'Neisseria gonorrhoeae',
    'HSV-2',
  ]),
  'answer'      => 'HPV 16/18',
  'explanation' => 'High-risk HPV strains 16 and 18 cause the majority of cervical neoplasia.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which condition involves prolapse of the bladder into the vaginal canal?',
  'choices'     => json_encode([
    'Cystocele',
    'Rectocele',
    'Enterocele',
    'Urethrocele',
  ]),
  'answer'      => 'Cystocele',
  'explanation' => 'Anterior vaginal wall prolapse of bladder constitutes a cystocele, often presenting with urinary symptoms.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which pelvic organ prolapse type is corrected by posterior repair (colporrhaphy)?',
  'choices'     => json_encode([
    'Rectocele',
    'Cystocele',
    'Uterine prolapse',
    'Enterocele',
  ]),
  'answer'      => 'Rectocele',
  'explanation' => 'Posterior colporrhaphy repairs the rectovaginal fascia to correct rectocele.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which pelvic inflammatory disease complication requires urgent gynecologic referral?',
  'choices'     => json_encode([
    'Tubo-ovarian abscess',
    'Bartholinitis',
    'Vaginitis',
    'Endometriosis',
  ]),
  'answer'      => 'Tubo-ovarian abscess',
  'explanation' => 'TOA can cause sepsis and rupture, necessitating hospitalization and surgical evaluation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 6,
  'question'    => 'Which imaging modality is first-line for evaluating suspected ovarian torsion?',
  'choices'     => json_encode([
    'Transvaginal ultrasound with Doppler',
    'Abdominal CT scan',
    'MRI pelvis',
    'Plain pelvic X-ray',
  ]),
  'answer'      => 'Transvaginal ultrasound with Doppler',
  'explanation' => 'TVUS with Doppler assesses ovarian blood flow and is sensitive for torsion diagnosis.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
