<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart5Seeder extends Seeder
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
  'part'        => 5,
  'question'    => 'Which condition is characterized by infection of the fetal membranes and amniotic fluid?',
  'choices'     => json_encode([
    'Chorioamnionitis',
    'Endometritis',
    'Preeclampsia',
    'Placental abruption',
  ]),
  'answer'      => 'Chorioamnionitis',
  'explanation' => 'Chorioamnionitis involves microbial invasion of the amniotic sac, presenting with fever, uterine tenderness, and fetal tachycardia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'What is the recommended antibiotic prophylaxis for group B streptococcus during labor?',
  'choices'     => json_encode([
    'Penicillin G every 4 hours',
    'Azithromycin single dose',
    'Ceftriaxone daily',
    'Clindamycin every 8 hours',
  ]),
  'answer'      => 'Penicillin G every 4 hours',
  'explanation' => 'Penicillin G given IV every 4 hours during labor is first-line for GBS prophylaxis to prevent neonatal infection.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'At what gestational age is antenatal corticosteroid therapy indicated for threatened preterm birth?',
  'choices'     => json_encode([
    '24–34 weeks',
    '20–24 weeks',
    '34–36 weeks',
    '36–40 weeks',
  ]),
  'answer'      => '24–34 weeks',
  'explanation' => 'Antenatal corticosteroids between 24 and 34 weeks improve fetal lung maturity and reduce neonatal complications.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which regimen is used for preterm labor neuroprotection before 32 weeks?',
  'choices'     => json_encode([
    'Magnesium sulfate for neuroprotection',
    'High-dose oxytocin',
    'Ergot alkaloids',
    'Misoprostol',
  ]),
  'answer'      => 'Magnesium sulfate for neuroprotection',
  'explanation' => 'Magnesium sulfate given to mothers at <32 weeks reduces the risk of cerebral palsy in preterm infants.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which supplementation is recommended to prevent neural tube defects before conception and during early pregnancy?',
  'choices'     => json_encode([
    '400 mcg folic acid daily',
    '60 mg elemental iron daily',
    '1.5 g calcium daily',
    '5 mg vitamin B12 daily',
  ]),
  'answer'      => '400 mcg folic acid daily',
  'explanation' => 'Daily folic acid supplementation of 400 mcg before conception and in the first trimester prevents neural tube defects.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'How much elemental calcium is recommended daily in pregnancy to reduce preeclampsia risk?',
  'choices'     => json_encode([
    '1.5 g',
    '500 mg',
    '50 mg',
    '2.5 g',
  ]),
  'answer'      => '1.5 g',
  'explanation' => 'Supplemental calcium of at least 1.5 g per day in populations with low calcium intake reduces preeclampsia incidence.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'At which visit is gestational diabetes screening with 75 g OGTT recommended in high-risk women?',
  'choices'     => json_encode([
    'First antenatal visit',
    '32–36 weeks',
    'After delivery',
    '20–24 weeks',
  ]),
  'answer'      => 'First antenatal visit',
  'explanation' => 'High-risk women should be screened early for gestational diabetes with a 75 g OGTT at the first prenatal visit.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which prophylactic vaccine should be administered postpartum to nonimmune mothers?',
  'choices'     => json_encode([
    'Rubella',
    'Influenza',
    'Tdap',
    'Varicella',
  ]),
  'answer'      => 'Rubella',
  'explanation' => 'Postpartum rubella vaccination prevents infection in subsequent pregnancies and is given to nonimmune mothers.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which antibiotic is recommended to treat syphilis in pregnancy?',
  'choices'     => json_encode([
    'Benzathine penicillin',
    'Erythromycin',
    'Azithromycin',
    'Vancomycin',
  ]),
  'answer'      => 'Benzathine penicillin',
  'explanation' => 'Benzathine penicillin is the drug of choice for syphilis in pregnancy to prevent congenital infection.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which regimen is recommended for intrapartum HIV prophylaxis?',
  'choices'     => json_encode([
    'Zidovudine and lamivudine',
    'Penicillin G',
    'Metronidazole',
    'Clindamycin',
  ]),
  'answer'      => 'Zidovudine and lamivudine',
  'explanation' => 'Combination antiretroviral therapy during labor reduces mother-to-child HIV transmission.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Postpartum hemorrhage is defined as blood loss exceeding what volume after vaginal delivery?',
  'choices'     => json_encode([
    '500 mL',
    '250 mL',
    '1000 mL',
    '1500 mL',
  ]),
  'answer'      => '500 mL',
  'explanation' => 'Primary PPH is blood loss >500 mL after vaginal birth and >1000 mL after cesarean.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which uterotonic is contraindicated in hypertensive patients due to vasoconstriction?',
  'choices'     => json_encode([
    'Methylergonovine',
    'Oxytocin',
    'Misoprostol',
    'Carboprost tromethamine',
  ]),
  'answer'      => 'Methylergonovine',
  'explanation' => 'Methylergonovine is contraindicated in hypertension because it can exacerbate high blood pressure.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which antenatal ultrasound finding suggests placenta accreta?',
  'choices'     => json_encode([
    'Loss of the retroplacental clear zone',
    'Increased amniotic fluid index',
    'Bilateral hydronephrosis',
    'Polyhydramnios',
  ]),
  'answer'      => 'Loss of the retroplacental clear zone',
  'explanation' => 'Accreta is suspected when the decidual interface is absent, causing placental tissue to appear adherent.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which condition is characterized by painful, reddish-brown lochia lasting beyond 6 weeks?',
  'choices'     => json_encode([
    'Subinvolution of the uterus',
    'Puerperal endometritis',
    'Retained products of conception',
    'Lochia rubra',
  ]),
  'answer'      => 'Subinvolution of the uterus',
  'explanation' => 'Subinvolution causes prolonged lochia and uterine tenderness due to retained tissue or infection.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which contraceptive method is recommended for breastfeeding mothers at 6 weeks postpartum?',
  'choices'     => json_encode([
    'Progestin-only pill',
    'Combined oral contraceptive',
    'Copper IUD',
    'Diaphragm',
  ]),
  'answer'      => 'Progestin-only pill',
  'explanation' => 'Mini-pills do not affect milk supply and are safe during lactation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which long-acting reversible contraceptive can be inserted immediately postpartum with high effectiveness?',
  'choices'     => json_encode([
    'Copper IUD',
    'Levonorgestrel IUD',
    'Depo-medroxyprogesterone acetate',
    'Etonogestrel implant',
  ]),
  'answer'      => 'Copper IUD',
  'explanation' => 'Copper IUD insertion postpartum is convenient and highly effective as contraception.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Preterm labor is defined as regular uterine contractions with cervical change before what gestational age?',
  'choices'     => json_encode([
    '37 weeks',
    '34 weeks',
    '40 weeks',
    '42 weeks',
  ]),
  'answer'      => '37 weeks',
  'explanation' => 'Preterm labor occurs when labor begins before 37 completed weeks of gestation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which form of analgesia is considered the gold standard for labor pain relief?',
  'choices'     => json_encode([
    'Epidural analgesia',
    'Intramuscular opioids',
    'Nitrous oxide',
    'Pudendal block',
  ]),
  'answer'      => 'Epidural analgesia',
  'explanation' => 'Epidurals provide effective, titratable pain relief with minimal fetal effects.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which complication of oxytocin infusion is related to water intoxication?',
  'choices'     => json_encode([
    'Hyponatremia',
    'Tachycardia',
    'Hyperglycemia',
    'Thrombocytopenia',
  ]),
  'answer'      => 'Hyponatremia',
  'explanation' => 'Oxytocin has antidiuretic properties leading to water retention and dilutional hyponatremia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 5,
  'question'    => 'Which amniotomy finding indicates possible fetal distress?',
  'choices'     => json_encode([
    'Thick meconium-stained fluid',
    'Clear fluid',
    'Light green fluid',
    'Pink-tinged fluid',
  ]),
  'answer'      => 'Thick meconium-stained fluid',
  'explanation' => 'Thick meconium suggests fetal hypoxia and warrants continuous monitoring and possible intervention.',
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
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
