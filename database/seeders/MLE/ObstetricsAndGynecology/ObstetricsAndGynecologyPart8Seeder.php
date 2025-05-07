<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart8Seeder extends Seeder
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
  'part'        => 8,
  'question'    => 'Which is the most common type of ovarian tumor in women under 30?',
  'choices'     => json_encode(['Germ cell tumor','Epithelial tumor','Sex cord-stromal tumor','Metastatic tumor']),
  'answer'      => 'Germ cell tumor',
  'explanation' => 'Germ cell tumors, such as dysgerminoma, predominate in younger women.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which test is the gold standard for diagnosing endometrial pathology in abnormal uterine bleeding?',
  'choices'     => json_encode(['Endometrial biopsy','Transvaginal ultrasound','Saline infusion sonohysterography','Hysteroscopy']),
  'answer'      => 'Endometrial biopsy',
  'explanation' => 'Office endometrial sampling provides tissue diagnosis for hyperplasia or carcinoma.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'At what age should routine screening mammography begin for average-risk women?',
  'choices'     => json_encode(['40 years','30 years','50 years','60 years']),
  'answer'      => '40 years',
  'explanation' => 'Most guidelines recommend annual or biennial mammography starting at age 40.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which medication is first-line for menopausal vasomotor symptoms?',
  'choices'     => json_encode(['Estrogen therapy','Progesterone therapy','GnRH agonist','Clomiphene citrate']),
  'answer'      => 'Estrogen therapy',
  'explanation' => 'Systemic estrogen effectively reduces hot flashes and night sweats in menopause.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which condition is characterized by cyclic pelvic pain linked to menses and chocolate cysts on ultrasound?',
  'choices'     => json_encode(['Endometriosis','Adenomyosis','Leiomyoma','Polycystic ovary syndrome']),
  'answer'      => 'Endometriosis',
  'explanation' => 'Endometriosis often presents with dysmenorrhea and endometriomas described as chocolate cysts.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which intrauterine pathology is best evaluated with saline infusion sonohysterography?',
  'choices'     => json_encode(['Submucosal fibroid','Ovarian cyst','PCOS morphology','Cervical polyp']),
  'answer'      => 'Submucosal fibroid',
  'explanation' => 'Sonohysterography delineates endometrial lesions such as polyps and submucosal leiomyomas.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'First-line management for heavy menstrual bleeding due to fibroids includes:',
  'choices'     => json_encode(['Tranexamic acid','Leuprolide','Hysterectomy','Endometrial ablation']),
  'answer'      => 'Tranexamic acid',
  'explanation' => 'Antifibrinolytics reduce menstrual blood loss and are used during menses.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which ovarian cyst is most likely to resolve spontaneously within two menstrual cycles?',
  'choices'     => json_encode(['Functional cyst','Dermoid cyst','Endometrioma','Serous cystadenoma']),
  'answer'      => 'Functional cyst',
  'explanation' => 'Follicular and corpus luteum cysts often regress spontaneously without intervention.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which Pap test result requires repeat cytology in 12 months rather than immediate colposcopy?',
  'choices'     => json_encode(['ASC-US with negative HPV','HSIL','AGC','AIS']),
  'answer'      => 'ASC-US with negative HPV',
  'explanation' => 'Low-risk ASC-US with negative high-risk HPV allows surveillance rather than immediate biopsy.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which vaccine is recommended for pregnant women to prevent pertussis in neonates?',
  'choices'     => json_encode(['Tdap','HPV','Influenza','MMR']),
  'answer'      => 'Tdap',
  'explanation' => 'Tdap in each pregnancy creates maternal antibodies transferred to the neonate for pertussis protection.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which antibiotic is first-line for uncomplicated cystitis in pregnancy?',
  'choices'     => json_encode(['Nitrofurantoin','Ciprofloxacin','Trimethoprim-sulfamethoxazole','Amoxicillin-clavulanate']),
  'answer'      => 'Nitrofurantoin',
  'explanation' => 'Nitrofurantoin is safe in pregnancy and effective for lower urinary tract infections.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'First-line diagnostic modality for adnexal torsion is:',
  'choices'     => json_encode(['Transvaginal ultrasound with Doppler','Abdominal X-ray','Pelvic MRI','CT scan']),
  'answer'      => 'Transvaginal ultrasound with Doppler',
  'explanation' => 'TVUS assesses tube and ovary enlargement, blood flow, and is the preferred modality.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which condition is characterized by painless third-trimester bleeding?',
  'choices'     => json_encode(['Placenta previa','Placental abruption','Vasa previa','Uterine rupture']),
  'answer'      => 'Placenta previa',
  'explanation' => 'Previas often present with painless bleeding due to placental tissue overlying the cervix.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which maneuver reduces shoulder dystocia by flexing maternal hips sharply against abdomen?',
  'choices'     => json_encode(['McRoberts maneuver','Wood’s screw maneuver','Zavanelli maneuver','Episiotomy']),
  'answer'      => 'McRoberts maneuver',
  'explanation' => 'McRoberts flexes legs to flatten pelvis and facilitate release of impacted fetal shoulder.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which hormone level is most predictive of ovarian reserve?',
  'choices'     => json_encode(['Anti-Müllerian hormone','FSH','LH','Prolactin']),
  'answer'      => 'Anti-Müllerian hormone',
  'explanation' => 'AMH correlates with follicular pool and predicts response to ovarian stimulation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which urogenital syndrome of menopause presents with vaginal dryness and dyspareunia?',
  'choices'     => json_encode(['Genitourinary syndrome of menopause','Osteoporosis','Vasomotor syndrome','Cardiovascular syndrome']),
  'answer'      => 'Genitourinary syndrome of menopause',
  'explanation' => 'GSM includes atrophy of vulvovaginal and lower urinary tract tissues due to estrogen deficiency.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which pelvic fracture in pregnancy poses highest risk to mother and fetus?',
  'choices'     => json_encode(['Open book fracture of pelvis','Pubic ramus fracture','Coccyx fracture','Iliac wing fracture']),
  'answer'      => 'Open book fracture of pelvis',
  'explanation' => 'This disrupts pelvic stability and can cause massive hemorrhage endangering both mother and fetus.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which surgical procedure treats uterine prolapse by obliterating vaginal canal?',
  'choices'     => json_encode(['Colpocleisis','Colporrhaphy','Uterine suspension','Hysterectomy']),
  'answer'      => 'Colpocleisis',
  'explanation' => 'Colpocleisis closes the vaginal canal and is suitable for women no longer desiring intercourse.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Which condition is screened by hysterosalpingography in infertility workup?',
  'choices'     => json_encode(['Tubal patency','Uterine fibroids','Ovarian reserve','Cervical stenosis']),
  'answer'      => 'Tubal patency',
  'explanation' => 'HSG visualizes uterine cavity and fallopian tube openness for fertility evaluation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 8,
  'question'    => 'Balloon catheter induction of labor primarily promotes cervical ripening via:',
  'choices'     => json_encode(['Mechanical dilation and prostaglandin release','Oxytocin stimulation','Estrogen priming','Amniotomy']),
  'answer'      => 'Mechanical dilation and prostaglandin release',
  'explanation' => 'The catheter applies pressure to the internal os, stimulating prostaglandin release and dilating the cervix.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
