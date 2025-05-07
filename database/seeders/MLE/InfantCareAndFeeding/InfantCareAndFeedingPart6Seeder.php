<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart6Seeder extends Seeder
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
$batch = [
    //1
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "What is cluster feeding in newborns?",
        'choices'     => json_encode([
            'Multiple feeds in rapid succession',
            'One long feed every 4 hours',
            'Feeding only at night',
            'Alternating breast and bottle',
        ]),
        'answer'      => 'Multiple feeds in rapid succession',
        'explanation' => 'Cluster feeding refers to several short feedings close together, often in the evening to boost milk supply and soothe the infant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which cue indicates an infant is feeding for comfort rather than hunger?",
        'choices'     => json_encode([
            'Rooting and lip smacking',
            'Hands to mouth and sucking',
            'Smiling and cooing at breast',
            'Crying that calms when picked up',
        ]),
        'answer'      => 'Crying that calms when picked up',
        'explanation' => 'Comfort feeding occurs when the infant seeks sucking to soothe, not due to true hunger signals.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "What is the first step in paced bottle feeding?",
        'choices'     => json_encode([
            'Hold bottle horizontal',
            'Tip bottle steeply',
            'Encourage rapid sucking',
            'Use narrow-neck bottle',
        ]),
        'answer'      => 'Hold bottle horizontal',
        'explanation' => 'Holding the bottle nearly horizontal controls formula flow and mimics the natural pace of breastfeeding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which position is recommended when feeding a baby with gastroesophageal reflux?",
        'choices'     => json_encode([
            'Supine flat',
            'Right side-lying',
            'Upright semi-reclined',
            'Prone on stomach',
        ]),
        'answer'      => 'Upright semi-reclined',
        'explanation' => 'An upright semi-reclined position reduces reflux by allowing gravity to keep stomach contents down.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which technique helps relieve breast engorgement?",
        'choices'     => json_encode([
            'Warm compress before feed',
            'Manual expression only',
            'Ice packs during feed',
            'Cold compress before feed',
        ]),
        'answer'      => 'Warm compress before feed',
        'explanation' => 'A warm compress before feeding encourages let-down and eases engorgement by improving milk flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "How often should preterm infants be fed?",
        'choices'     => json_encode([
            'Every 2-3 hours',
            'Every 4-6 hours',
            'Only on demand',
            'Once at night',
        ]),
        'answer'      => 'Every 2-3 hours',
        'explanation' => 'Preterm infants require frequent feeding due to small stomach capacity and high metabolic needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "What volume advancement is typical in preterm feeding protocols?",
        'choices'     => json_encode([
            'Increase by 10 mL per feed daily',
            'No increase for 1 month',
            'Double volume weekly',
            'Maintain same volume always',
        ]),
        'answer'      => 'Increase by 10 mL per feed daily',
        'explanation' => 'Gradual advancement by 10 mL per feed supports tolerance and reduces NEC risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which measurement best assesses hydration status in infants?",
        'choices'     => json_encode([
            'Body weight gain',
            'Skin turgor and fontanelle',
            'Heart rate alone',
            'Head circumference',
        ]),
        'answer'      => 'Skin turgor and fontanelle',
        'explanation' => 'Poor skin turgor and a sunken fontanelle are clinical signs of dehydration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "What is the purpose of human milk fortifier?",
        'choices'     => json_encode([
            'Increase fat content',
            'Enhance immunoglobulins',
            'Boost protein and calories',
            'Reduce lactose',
        ]),
        'answer'      => 'Boost protein and calories',
        'explanation' => 'Human milk fortifiers add extra protein, calories, vitamins, and minerals for preterm infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which supplement is recommended for exclusively breastfed infants to prevent anemia?",
        'choices'     => json_encode([
            'Vitamin D',
            'Iron drops',
            'Calcium chews',
            'Vitamin C fluids',
        ]),
        'answer'      => 'Iron drops',
        'explanation' => 'Iron supplementation from 4–6 months prevents iron deficiency anemia in breastfed infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "What action should be taken if an infant aspirates during feeding?",
        'choices'     => json_encode([
            'Continue feeding slowly',
            'Perform back blows and evaluate',
            'Change feeding position only',
            'Switch to bottle feeding',
        ]),
        'answer'      => 'Perform back blows and evaluate',
        'explanation' => 'Immediate airway clearance with back blows and clinical evaluation is required after aspiration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which feeding adjustment helps infants with constipation?",
        'choices'     => json_encode([
            'Offer thin formula',
            'Add water to formula',
            'Thicken feeds with cereal',
            'Reduce feeding frequency',
        ]),
        'answer'      => 'Thicken feeds with cereal',
        'explanation' => 'Adding a small amount of rice cereal can help form stools and relieve constipation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "How should feeding equipment be cleaned to minimize infection?",
        'choices'     => json_encode([
            'Rinse with water only',
            'Wash with hot soapy water and air dry',
            'Use only bleach solution',
            'Wipe with alcohol',
        ]),
        'answer'      => 'Wash with hot soapy water and air dry',
        'explanation' => 'Thorough washing and air drying prevents microbial growth and contamination.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which practice benefits infants of vegan mothers?",
        'choices'     => json_encode([
            'Supplement maternal vitamin B12',
            'Delay solids until 1 year',
            'Use unmodified soy formula',
            'Avoid supplements entirely',
        ]),
        'answer'      => 'Supplement maternal vitamin B12',
        'explanation' => 'Maternal B12 supplementation prevents deficiency in breastfed infants of vegan mothers.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "What is an appropriate volume for a single feed of a 2-month-old infant?",
        'choices'     => json_encode([
            '60–90 mL',
            '90–120 mL',
            '120–150 mL',
            '150–180 mL',
        ]),
        'answer'      => '90–120 mL',
        'explanation' => 'By 2 months, infants typically consume 90–120 mL per feed every 3–4 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which sign indicates a feeding plan is adequate for growth?",
        'choices'     => json_encode([
            'Weight plateau',
            'Consistent weight gain along growth curve',
            'Reduced appetite',
            'Excessive fussiness after feeds',
        ]),
        'answer'      => 'Consistent weight gain along growth curve',
        'explanation' => 'Steady growth along established percentiles reflects sufficient nutritional intake.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "When should allergenic solids like peanuts be introduced?",
        'choices'     => json_encode([
            'After 1 year',
            'Between 4–6 months',
            'Only after solids established at 2 years',
            'Avoid entirely',
        ]),
        'answer'      => 'Between 4–6 months',
        'explanation' => 'Early, guided introduction of allergenic foods may reduce allergy risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which immunization is advised at birth to prevent hemorrhagic disease?",
        'choices'     => json_encode([
            'Hepatitis B vaccine',
            'Vitamin K injection',
            'BCG vaccine',
            'Oral polio vaccine',
        ]),
        'answer'      => 'Vitamin K injection',
        'explanation' => 'Vitamin K at birth prevents vitamin K deficiency bleeding in newborns.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which sign may indicate early dehydration in infants?",
        'choices'     => json_encode([
            'Sunken fontanelle',
            'Increased wet diapers',
            'Moist mucous membranes',
            'Weight gain',
        ]),
        'answer'      => 'Sunken fontanelle',
        'explanation' => 'A sunken fontanelle is an early indicator of reduced intracranial pressure due to dehydration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 6,
        'question'    => "Which component of breast milk supports neurological development?",
        'choices'     => json_encode([
            'Lactose',
            'DHA (docosahexaenoic acid)',
            'Casein',
            'Vitamin C',
        ]),
        'answer'      => 'DHA (docosahexaenoic acid)',
        'explanation' => 'DHA is an omega-3 fatty acid vital for infant brain and retinal development.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
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
