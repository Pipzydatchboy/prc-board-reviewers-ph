<?php

namespace Database\Seeders\MLE\ObstetricsAndGynecology;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ObstetricsAndGynecologyPart2Seeder extends Seeder
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
  'part'        => 2,
  'question'    => 'Which medication is commonly used as a tocolytic to inhibit preterm labor?',
  'choices'     => json_encode([
    'Nifedipine',
    'Oxytocin',
    'Methylergonovine',
    'Magnesium sulfate',
  ]),
  'answer'      => 'Nifedipine',
  'explanation' => 'Nifedipine is a calcium channel blocker used to relax uterine smooth muscle and delay preterm labor.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 2
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'What defines premature rupture of membranes (PROM)?',
  'choices'     => json_encode([
    'Spontaneous rupture of membranes before labor onset at any gestational age',
    'Rupture of membranes after labor begins',
    'Intact membranes until 42 weeks',
    'Artificial rupture before term',
  ]),
  'answer'      => 'Spontaneous rupture of membranes before labor onset at any gestational age',
  'explanation' => 'PROM is when membranes rupture spontaneously before labor, increasing infection risk.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 3
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Painless vaginal bleeding in the second trimester suggests which condition?',
  'choices'     => json_encode([
    'Placenta previa',
    'Placental abruption',
    'Uterine rupture',
    'Vasa previa',
  ]),
  'answer'      => 'Placenta previa',
  'explanation' => 'Placenta previa presents with painless bleeding due to low placental implantation over the cervix.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 4
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which action is contraindicated in suspected placenta previa?',
  'choices'     => json_encode([
    'Digital vaginal examination',
    'Transabdominal ultrasound',
    'Bed rest',
    'Crossmatch blood',
  ]),
  'answer'      => 'Digital vaginal examination',
  'explanation' => 'Digital exam can provoke severe hemorrhage if placenta covers the cervix; ultrasound is preferred.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 5
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'A sudden tear in the uterine wall during labor indicates:',
  'choices'     => json_encode([
    'Uterine rupture',
    'Uterine inversion',
    'Placental separation',
    'Amniotic embolism',
  ]),
  'answer'      => 'Uterine rupture',
  'explanation' => 'Uterine rupture is a life-threatening tear in the uterine wall with acute pain and fetal distress.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 6
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which patient is a candidate for trial of labor after cesarean (TOLAC)?',
  'choices'     => json_encode([
    'One prior low-transverse cesarean with no contraindications',
    'Two classical uterine incisions',
    'Previous uterine rupture',
    'Placenta previa history',
  ]),
  'answer'      => 'One prior low-transverse cesarean with no contraindications',
  'explanation' => 'TOLAC is appropriate for a single prior low-transverse scar and no other risk factors.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 7
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which is an absolute indication for cesarean delivery?',
  'choices'     => json_encode([
    'Placenta previa covering os',
    'Gestational diabetes',
    'Advanced maternal age',
    'Breech presentation at term',
  ]),
  'answer'      => 'Placenta previa covering os',
  'explanation' => 'Complete placenta previa is managed by cesarean to avoid hemorrhage.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 8
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which maneuver is used to resolve shoulder dystocia?',
  'choices'     => json_encode([
    'McRoberts maneuver',
    'Kristeller maneuver',
    'Leopold maneuver',
    'Bracht maneuver',
  ]),
  'answer'      => 'McRoberts maneuver',
  'explanation' => 'McRoberts flexes maternal hips to widen the pelvis and release the impacted shoulder.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 9
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'The initial management of umbilical cord prolapse includes:',
  'choices'     => json_encode([
    'Elevating presenting part and immediate cesarean',
    'Arm extension for delivery',
    'Administering oxytocin',
    'Performing amniotomy',
  ]),
  'answer'      => 'Elevating presenting part and immediate cesarean',
  'explanation' => 'Relief of cord pressure and urgent delivery are critical to prevent fetal hypoxia.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 10
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Leopold’s first maneuver assesses:',
  'choices'     => json_encode([
    'Fetal lie',
    'Fetal heartbeat',
    'Cervical dilation',
    'Amniotic fluid volume',
  ]),
  'answer'      => 'Fetal lie',
  'explanation' => 'The first maneuver palpates the upper abdomen to determine fetal orientation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 11
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'A Bishop score greater than 8 indicates:',
  'choices'     => json_encode([
    'Favorable cervix for induction of labor',
    'High risk of preterm labor',
    'Increased chance of placenta previa',
    'Absolute need for cesarean',
  ]),
  'answer'      => 'Favorable cervix for induction of labor',
  'explanation' => 'A Bishop score >8 suggests that the cervix is ripe and induction is likely to succeed.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 12
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which agent is first-line for induction of labor?',
  'choices'     => json_encode([
    'Oxytocin infusion',
    'Dinoprostone gel',
    'Misoprostol oral',
    'Ergometrine injection',
  ]),
  'answer'      => 'Oxytocin infusion',
  'explanation' => 'Oxytocin is the primary pharmacologic agent used for induction and augmentation of labor.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 13
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'The 1-hour glucose challenge test is performed at:',
  'choices'     => json_encode([
    '24–28 weeks gestation',
    '12–14 weeks gestation',
    '32–36 weeks gestation',
    'After delivery',
  ]),
  'answer'      => '24–28 weeks gestation',
  'explanation' => 'GCT screening for gestational diabetes is recommended between 24 and 28 weeks.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 14
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which blood pressure reading is diagnostic of gestational hypertension?',
  'choices'     => json_encode([
    '≥140/90 mmHg after 20 weeks without proteinuria',
    '<120/80 mmHg',
    '≥160/110 mmHg before 20 weeks',
    'Any diastolic >60 mmHg',
  ]),
  'answer'      => '≥140/90 mmHg after 20 weeks without proteinuria',
  'explanation' => 'Gestational hypertension is elevated BP after 20 weeks in absence of proteinuria.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 15
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Hemolysis, elevated liver enzymes, and low platelets define:',
  'choices'     => json_encode([
    'HELLP syndrome',
    'Preeclampsia',
    'Eclampsia',
    'Acute fatty liver of pregnancy',
  ]),
  'answer'      => 'HELLP syndrome',
  'explanation' => 'HELLP is a severe form of preeclampsia characterized by hemolysis, elevated liver enzymes, and low platelets.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 16
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Ectopic pregnancy most commonly implants in the:',
  'choices'     => json_encode([
    'Fallopian tube',
    'Ovary',
    'Abdominal cavity',
    'Cervix',
  ]),
  'answer'      => 'Fallopian tube',
  'explanation' => 'The ampullary portion of the tube is the most frequent site of ectopic implantation.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 17
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which prophylaxis prevents Rh isoimmunization in Rh-negative mothers?',
  'choices'     => json_encode([
    'Anti-D immunoglobulin',
    'RhoGAM vaccine',
    'IVIG therapy',
    'IgM supplementation',
  ]),
  'answer'      => 'Anti-D immunoglobulin',
  'explanation' => 'Anti-D IgG at 28 weeks and postpartum prevents maternal sensitization to Rh antigens.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 18
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which scale screens for postpartum depression?',
  'choices'     => json_encode([
    'Edinburgh Postnatal Depression Scale',
    'Apgar score',
    'Glasgow Coma Scale',
    'Bishop score',
  ]),
  'answer'      => 'Edinburgh Postnatal Depression Scale',
  'explanation' => 'EPDS is a 10-item questionnaire used to identify risk of postpartum depression.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 19
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Which management is indicated for severe lactational breast engorgement?',
  'choices'     => json_encode([
    'Frequent breastfeeding and cold compresses',
    'Complete cessation of feeding',
    'Hot baths only',
    'Breast binding without feeding',
  ]),
  'answer'      => 'Frequent breastfeeding and cold compresses',
  'explanation' => 'Regular emptying and cold packs reduce engorgement and discomfort.',
  'created_at'  => $now,
  'updated_at'  => $now,
];

// 20
$batch[] = [
  'subject_id'  => 27,
  'part'        => 2,
  'question'    => 'Lactational amenorrhea method (LAM) requires all EXCEPT:',
  'choices'     => json_encode([
    'Exclusive breastfeeding',
    'Infant under 6 months',
    'Amenorrhea',
    'Supplemental feeding',
  ]),
  'answer'      => 'Supplemental feeding',
  'explanation' => 'LAM efficacy depends on exclusive breastfeeding without supplementation.',
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
            $this->command->warn("Part 2 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 2. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 2.");
    }
}
