<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart10Seeder extends Seeder
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
  'part'        => 10,
  'question'    => 'Which medication is first-line for postpartum hypertension?',
  'choices'     => json_encode([
    'Labetalol',
    'Hydralazine',
    'Methyldopa',
    'Nifedipine',
  ]),
  'answer'      => 'Labetalol',
  'explanation' => 'Labetalol is preferred for rapid blood pressure control in postpartum hypertensive patients.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'What is the initial management of acute uterine inversion?',
  'choices'     => json_encode([
    'Manual replacement of the uterus',
    'Oxytocin infusion only',
    'Immediate hysterectomy',
    'Uterine massage',
  ]),
  'answer'      => 'Manual replacement of the uterus',
  'explanation' => 'Prompt manual replacement restores uterine anatomy and reduces hemorrhage.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Sheehan syndrome is caused by:',
  'choices'     => json_encode([
    'Pituitary infarction after severe PPH',
    'Preeclampsia',
    'Amniotic fluid embolism',
    'Eclampsia seizures',
  ]),
  'answer'      => 'Pituitary infarction after severe PPH',
  'explanation' => 'Postpartum hypopituitarism results from ischemic necrosis due to massive blood loss.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Primary lactation failure is best managed by:',
  'choices'     => json_encode([
    'Frequent breastfeeding and lactation support',
    'Supplemental formula only',
    'Breast binding',
    'Early weaning',
  ]),
  'answer'      => 'Frequent breastfeeding and lactation support',
  'explanation' => 'Optimizing latch and feeding frequency stimulates milk production in primary lactation failure.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Subcutaneous misoprostol dose recommended for PPH prevention is:',
  'choices'     => json_encode([
    '600 mcg orally',
    '200 mcg IV',
    '400 mcg sublingual',
    '800 mcg vaginal',
  ]),
  'answer'      => '600 mcg orally',
  'explanation' => 'Oral misoprostol 600 mcg is an effective alternative uterotonic for PPH prevention.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'The most common cause of obstetric shock is:',
  'choices'     => json_encode([
    'Uterine atony',
    'Amniotic fluid embolism',
    'Sepsis',
    'Preeclampsia',
  ]),
  'answer'      => 'Uterine atony',
  'explanation' => 'Failure of uterine contraction leads to the majority of postpartum hemorrhagic shock cases.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Recommended thromboprophylaxis postpartum in high-risk women is:',
  'choices'     => json_encode([
    'LMWH for 6 weeks',
    'Aspirin daily',
    'Compression stockings only',
    'Unfractionated heparin only',
  ]),
  'answer'      => 'LMWH for 6 weeks',
  'explanation' => 'Extended LMWH reduces VTE risk in postpartum women with risk factors.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Screening for postpartum depression uses which tool?',
  'choices'     => json_encode([
    'Edinburgh Postnatal Depression Scale',
    'PHQ-9',
    'GAD-7',
    'EPDS only for antenatal',
  ]),
  'answer'      => 'Edinburgh Postnatal Depression Scale',
  'explanation' => 'EPDS is validated for identifying postpartum mood disorders.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'When should staples be removed after cesarean delivery?',
  'choices'     => json_encode([
    '48–72 hours',
    '7–10 days',
    '2–3 weeks',
    '24 hours',
  ]),
  'answer'      => '48–72 hours',
  'explanation' => 'Timely removal at 2–3 days reduces infection and allows incision healing.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Optimal timing to resume sexual activity postpartum is:',
  'choices'     => json_encode([
    '6 weeks after delivery',
    '2 weeks after delivery',
    'Immediately after discharge',
    '3 months after delivery',
  ]),
  'answer'      => '6 weeks after delivery',
  'explanation' => 'Postpartum exam at 6 weeks ensures healing before resuming intercourse.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Recommended post-delivery weight gain resolution goal is:',
  'choices'     => json_encode([
    'Return to pre-pregnancy weight by 6 months',
    'Maintain 5 kg above pre-pregnancy indefinitely',
    'Lose >1 kg per week indefinitely',
    'No weight loss recommended',
  ]),
  'answer'      => 'Return to pre-pregnancy weight by 6 months',
  'explanation' => 'Gradual weight loss supports maternal health and lactation.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'First-line NSAID for postpartum pain in breastfeeding mothers is:',
  'choices'     => json_encode([
    'Ibuprofen',
    'Naproxen',
    'Aspirin',
    'Diclofenac',
  ]),
  'answer'      => 'Ibuprofen',
  'explanation' => 'Ibuprofen is effective and safe, with minimal excretion into breast milk.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'NYHA class III–IV cardiac disease in pregnancy indicates:',
  'choices'     => json_encode([
    'High maternal-fetal risk requiring specialized care',
    'No additional risk',
    'Low risk for pregnancy',
    'Contraindication to pregnancy',
  ]),
  'answer'      => 'High maternal-fetal risk requiring specialized care',
  'explanation' => 'Advanced heart disease needs multidisciplinary management due to decompensation risk.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Asymmetrical SGA is characterized by:',
  'choices'     => json_encode([
    'Head sparing and smaller abdomen',
    'Proportionate smallness',
    'Macrocephaly',
    'Placental edema',
  ]),
  'answer'      => 'Head sparing and smaller abdomen',
  'explanation' => 'Placental insufficiency leads to brain sparing but reduced liver and fat deposition.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Indication for amnioinfusion during labor is:',
  'choices'     => json_encode([
    'Recurrent variable decelerations',
    'Late decelerations only',
    'Absent variability only',
    'Early decelerations only',
  ]),
  'answer'      => 'Recurrent variable decelerations',
  'explanation' => 'Transcervical infusion relieves cord compression causing variable decels.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Post-term pregnancy is defined by gestation ≥:',
  'choices'     => json_encode([
    '42 weeks',
    '40 weeks',
    '41 weeks',
    '39 weeks',
  ]),
  'answer'      => '42 weeks',
  'explanation' => 'Pregnancy persisting beyond 42 weeks is post-term, with increased perinatal risks.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Fetal fibronectin test is used to:',
  'choices'     => json_encode([
    'Predict preterm delivery risk',
    'Diagnose PROM',
    'Assess fetal lung maturity',
    'Measure amniotic fluid volume',
  ]),
  'answer'      => 'Predict preterm delivery risk',
  'explanation' => 'Positive fFN in cervicovaginal secretions indicates disruption of fetal-maternal interface and risk of imminent delivery.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Vesicovaginal fistula management postpartum includes:',
  'choices'     => json_encode([
    'Surgical repair after 3 months',
    'Immediate repair within 48 hours',
    'Conservative antibiotics only',
    'Radiation therapy',
  ]),
  'answer'      => 'Surgical repair after 3 months',
  'explanation' => 'Delay allows inflammation to subside and tissue healing before definitive fistula closure.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Acute fatty liver of pregnancy is characterized by:',
  'choices'     => json_encode([
    'Hypoglycemia, elevated liver enzymes, and coagulopathy',
    'Hyperglycemia and normal LFTs',
    'Isolated thrombocytosis',
    'Elevated amylase only',
  ]),
  'answer'      => 'Hypoglycemia, elevated liver enzymes, and coagulopathy',
  'explanation' => 'AFLP presents with liver failure signs requiring prompt delivery.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 10,
  'question'    => 'Which postpartum infection requires surgical evacuation of retained products?',
  'choices'     => json_encode([
    'Endometritis with retained placenta',
    'Mastitis',
    'UTI',
    'Cervicitis',
  ]),
  'answer'      => 'Endometritis with retained placenta',
  'explanation' => 'Retained tissue perpetuates infection and necessitates removal to resolve endometritis.',
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
