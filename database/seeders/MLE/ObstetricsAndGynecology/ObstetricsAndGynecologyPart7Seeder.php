<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart7Seeder extends Seeder
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
  'part'        => 7,
  'question'    => 'What medication is first-line for intrahepatic cholestasis of pregnancy to relieve pruritus and improve liver enzymes?',
  'choices'     => json_encode([
    'Ursodeoxycholic acid',
    'Cholestyramine',
    'Rifampin',
    'Hydroxyzine',
  ]),
  'answer'      => 'Ursodeoxycholic acid',
  'explanation' => 'Ursodeoxycholic acid improves bile flow and reduces maternal itching and liver enzyme levels in ICP.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which lab finding is characteristic of disseminated intravascular coagulation in obstetric emergencies?',
  'choices'     => json_encode([
    'Elevated D-dimer and prolonged PT',
    'Elevated fibrinogen',
    'Thrombocytosis',
    'Shortened aPTT',
  ]),
  'answer'      => 'Elevated D-dimer and prolonged PT',
  'explanation' => 'DIC shows consumption coagulopathy with high D-dimer, low fibrinogen, prolonged clotting times, and thrombocytopenia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'In obstetric hemorrhagic shock, initial fluid resuscitation should include:',
  'choices'     => json_encode([
    'Isotonic crystalloids bolus',
    'Colloid only',
    'Hypotonic saline',
    'Blood only',
  ]),
  'answer'      => 'Isotonic crystalloids bolus',
  'explanation' => 'Initial management of hemorrhagic shock begins with rapid infusion of isotonic crystalloids while arranging blood products.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'During maternal cardiac arrest, which maneuver optimizes aortocaval decompression?',
  'choices'     => json_encode([
    'Left uterine displacement',
    'Supine position',
    'Trendelenburg position',
    'Epidural block',
  ]),
  'answer'      => 'Left uterine displacement',
  'explanation' => 'Manual or wedge tilting to the left displaces the gravid uterus off the inferior vena cava during CPR in pregnancy.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which of the following is a contraindication to trial of labor after cesarean (TOLAC)?',
  'choices'     => json_encode([
    'Classical uterine incision',
    'One prior low-transverse cesarean',
    'Singleton cephalic pregnancy',
    'No contraindications',
  ]),
  'answer'      => 'Classical uterine incision',
  'explanation' => 'A prior classical (vertical) incision increases risk of uterine rupture, contraindicating TOLAC.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which insulin regimen is preferred for tight glycemic control in pregnant women with type 1 diabetes?',
  'choices'     => json_encode([
    'Basal-bolus insulin therapy',
    'NPH insulin only',
    'Regular insulin only',
    'Sulfonylurea therapy',
  ]),
  'answer'      => 'Basal-bolus insulin therapy',
  'explanation' => 'Basal-bolus regimens mimic physiologic insulin release and provide optimal control during pregnancy.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which systemic lupus erythematosus complication poses the highest risk during pregnancy?',
  'choices'     => json_encode([
    'Preterm birth',
    'Gestational diabetes',
    'Uterine fibroids',
    'Placenta previa',
  ]),
  'answer'      => 'Preterm birth',
  'explanation' => 'SLE increases risk of preterm labor, preeclampsia, and fetal loss, requiring close monitoring.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'How is cardiac disease classified in pregnancy according to NYHA functional class for risk stratification?',
  'choices'     => json_encode([
    'I to IV based on symptoms and activity tolerance',
    'A to D based on ejection fraction',
    'X to Z based on valve involvement',
    'Low to high risk categories only',
  ]),
  'answer'      => 'I to IV based on symptoms and activity tolerance',
  'explanation' => 'NYHA class I—no limitation; II—slight; III—marked; IV—symptoms at rest, guiding obstetric management.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which tocolytic agent acts as a beta-agonist to suppress uterine contractions?',
  'choices'     => json_encode([
    'Terbutaline',
    'Oxytocin',
    'Prostaglandin E2',
    'Magnesium sulfate',
  ]),
  'answer'      => 'Terbutaline',
  'explanation' => 'Terbutaline relaxes smooth muscle via beta-2 adrenergic receptor activation to delay preterm labor.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'What is the recommended corticosteroid regimen for fetal lung maturity in preterm labor?',
  'choices'     => json_encode([
    'Betamethasone 12 mg IM x2 doses 24 hours apart',
    'Dexamethasone 6 mg IM x2 doses',
    'Hydrocortisone IV',
    'Prednisone PO',
  ]),
  'answer'      => 'Betamethasone 12 mg IM x2 doses 24 hours apart',
  'explanation' => 'Standard regimen is betamethasone 12 mg IM every 24 hours for two doses to enhance fetal lung surfactant.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which definition best describes small for gestational age (SGA)?',
  'choices'     => json_encode([
    'Birth weight below 10th percentile for gestational age',
    'Birth weight above 90th percentile',
    'Birth weight between 10–90th percentiles',
    'Birth weight below 3rd percentile only',
  ]),
  'answer'      => 'Birth weight below 10th percentile for gestational age',
  'explanation' => 'SGA refers to infants with weight <10th percentile, indicating possible growth restriction.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which amniotic fluid finding on ultrasound defines oligohydramnios?',
  'choices'     => json_encode([
    'AFI <5 cm',
    'AFI >25 cm',
    'AFI 5–25 cm',
    'Single deepest pocket >8 cm',
  ]),
  'answer'      => 'AFI <5 cm',
  'explanation' => 'Oligohydramnios is diagnosed when AFI is less than 5 cm or MVP <2 cm on ultrasound.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Initial management of placental abruption includes:',
  'choices'     => json_encode([
    'Immediate stabilization and assessment for delivery',
    'Oral tocolytics',
    'Bed rest until term',
    'Magnesium sulfate infusion',
  ]),
  'answer'      => 'Immediate stabilization and assessment for delivery',
  'explanation' => 'Abruption requires hemodynamic stabilization and often prompt delivery depending on severity.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which lab profile helps distinguish HELLP syndrome from acute fatty liver of pregnancy?',
  'choices'     => json_encode([
    'Elevated ALT/AST and LDH with low platelets in HELLP',
    'Normal liver enzymes in HELLP',
    'High ammonia levels only in HELLP',
    'No hemolysis in AFLP',
  ]),
  'answer'      => 'Elevated ALT/AST and LDH with low platelets in HELLP',
  'explanation' => 'HELLP is defined by hemolysis, elevated liver enzymes, and low platelets; AFLP features profound hypoglycemia.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Low-dose aspirin prophylaxis for preeclampsia is recommended starting at what gestational age for high-risk women?',
  'choices'     => json_encode([
    '12–16 weeks',
    '20–24 weeks',
    '28–32 weeks',
    'After 36 weeks',
  ]),
  'answer'      => '12–16 weeks',
  'explanation' => 'Aspirin 81 mg daily from 12 to 16 weeks gestation reduces risk of preeclampsia in high-risk patients.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'How is adequacy of group B streptococcus prophylaxis documented?',
  'choices'     => json_encode([
    'Antibiotic initiated ≥4 hours before delivery',
    'Any antibiotic given during labor',
    'Prophylaxis given within 1 hour of delivery',
    'Postpartum antibiotic only',
  ]),
  'answer'      => 'Antibiotic initiated ≥4 hours before delivery',
  'explanation' => 'Timely administration at least 4 hours prior optimizes neonatal protection against GBS sepsis.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which augmentation method involves amniotomy and oxytocin for prolonged labor?',
  'choices'     => json_encode([
    'Active management of labor',
    'Expectant management',
    'Operative vaginal delivery',
    'Trial of labor',
  ]),
  'answer'      => 'Active management of labor',
  'explanation' => 'AMOL includes artificial rupture of membranes and oxytocin to accelerate labor duration.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Friedman’s curve historically plots which labor parameters?',
  'choices'     => json_encode([
    'Cervical dilation over time',
    'Fetal heart rate variability',
    'Maternal blood pressure trends',
    'Amniotic fluid index',
  ]),
  'answer'      => 'Cervical dilation over time',
  'explanation' => 'Friedman chart tracks cervical changes to assess labor progress and identify arrest disorders.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Fetal scalp blood sampling during labor assesses which parameter directly?',
  'choices'     => json_encode([
    'Fetal pH',
    'Fetal heart rate',
    'Amniotic fluid volume',
    'Cervical dilation',
  ]),
  'answer'      => 'Fetal pH',
  'explanation' => 'Scalp pH <7.20 indicates acidosis and likely distress, guiding delivery decisions.',
  'created_at'  => $now,
  'updated_at'  => $now
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 7,
  'question'    => 'Which management reduces risk of meconium aspiration syndrome in post-term infants?',
  'choices'     => json_encode([
    'Immediate suctioning of oropharynx before first breath',
    'Immediate bathing',
    'Routine intubation for all infants',
    'Delayed cord clamping',
  ]),
  'answer'      => 'Immediate suctioning of oropharynx before first breath',
  'explanation' => 'Clearing airway secretions before respiration helps prevent aspiration of meconium into lungs.',
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
            $this->command->warn("Part 7 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 7. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 7.");
    }
}
