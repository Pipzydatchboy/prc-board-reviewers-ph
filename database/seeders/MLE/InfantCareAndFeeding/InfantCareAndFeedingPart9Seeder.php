<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => "Which sign indicates adequate milk transfer during breastfeeding?",
        'choices'     => json_encode([
            'No audible swallowing',
            'Audible swallowing after several sucks',
            'Baby falls asleep immediately',
            'Compressed cheeks during suck',
        ]),
        'answer'      => 'Audible swallowing after several sucks',
        'explanation' => 'Hearing swallowing indicates milk is moving from breast to infant.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "What is an early hunger cue in infants?",
        'choices'     => json_encode([
            'Crying loudly',
            'Turning head and opening mouth',
            'Spitting up',
            'Sleeping contentedly',
        ]),
        'answer'      => 'Turning head and opening mouth',
        'explanation' => 'Rooting and mouth opening are early hunger cues before crying.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which method is recommended to thaw frozen breast milk?",
        'choices'     => json_encode([
            'Microwave on high',
            'Warm water bath',
            'Boiling water immersion',
            'Leave at room temperature overnight',
        ]),
        'answer'      => 'Warm water bath',
        'explanation' => 'Gentle warming in warm water preserves nutrients and avoids hot spots.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "How many wet diapers should a 3-day-old infant have?",
        'choices'     => json_encode([
            '1-2 per day',
            '3-5 per day',
            '6-8 per day',
            '10-12 per day',
        ]),
        'answer'      => '3-5 per day',
        'explanation' => 'By day 3, infants typically produce 3–5 wet diapers daily.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which action supports milk production?",
        'choices'     => json_encode([
            'Limit feeds to 3 per day',
            'Ensure frequent breast emptying',
            'Use tight-fitting bras',
            'Avoid supplemental pumping',
        ]),
        'answer'      => 'Ensure frequent breast emptying',
        'explanation' => 'Frequent removal of milk stimulates prolactin and increases production.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "What is the recommended head position for breastfeeding?",
        'choices'     => json_encode([
            'Extended neck',
            'Neutral alignment',
            'Flexed chin to chest',
            'Rotated to the side',
        ]),
        'answer'      => 'Neutral alignment',
        'explanation' => 'Neutral head and neck alignment facilitates airway patency and latch.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which behavior indicates satiety in infants?",
        'choices'     => json_encode([
            'Sucking vigorously',
            'Hand-to-mouth motion',
            'Turning away from breast',
            'Rooting toward breast',
        ]),
        'answer'      => 'Turning away from breast',
        'explanation' => 'Turning head or pushing away signals the infant is full.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "How should a caregiver respond to infant feeding refusal?",
        'choices'     => json_encode([
            'Force feed until calm',
            'Offer breast or bottle later',
            'Stop feeding and begin solids',
            'Switch to water feeding',
        ]),
        'answer'      => 'Offer breast or bottle later',
        'explanation' => 'Waiting and offering later respects infant cues and prevents negative feeding associations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which nutrient is added by fortifying human milk for preterms?",
        'choices'     => json_encode([
            'Vitamin C',
            'Casein',
            'Calcium and phosphate',
            'Lactose',
        ]),
        'answer'      => 'Calcium and phosphate',
        'explanation' => 'Fortifiers add minerals like calcium and phosphate to support bone mineralization.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "What is an indication for specialist evaluation in breastfeeding?",
        'choices'     => json_encode([
            'Mild nipple tenderness',
            'Persistent pain beyond first week',
            'Decreased milk supply after 6 months',
            'Infant sleepy after feeds',
        ]),
        'answer'      => 'Persistent pain beyond first week',
        'explanation' => 'Continued nipple pain may indicate poor latch or infection requiring assessment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which position is best for bottle feeding?",
        'choices'     => json_encode([
            'Flat supine',
            'Semi-upright with support',
            'Prone on caregiver’s lap',
            'Side-lying',
        ]),
        'answer'      => 'Semi-upright with support',
        'explanation' => 'Semi-upright position allows control of flow and reduces aspiration risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "When introducing solids, which order is recommended?",
        'choices'     => json_encode([
            'Allergenic foods first',
            'Cereal, then vegetables, fruits, proteins',
            'Proteins first',
            'Fruits only',
        ]),
        'answer'      => 'Cereal, then vegetables, fruits, proteins',
        'explanation' => 'Introduce iron-fortified cereals first, then vegetables, fruits, and proteins to monitor tolerance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which sign suggests milk ejection reflex during pumping?",
        'choices'     => json_encode([
            'Nothing happens',
            'Flow of milk increases',
            'Pump handle warms',
            'Pump lid rattles',
        ]),
        'answer'      => 'Flow of milk increases',
        'explanation' => 'A noticeable increase in milk flow indicates let-down and milk ejection reflex.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "What is the recommended iron supplementation for preterm infants?",
        'choices'     => json_encode([
            '2 mg/kg/day',
            '4 mg/kg/day',
            '1 mg/kg/day',
            '0.5 mg/kg/day',
        ]),
        'answer'      => '2 mg/kg/day',
        'explanation' => 'Preterm infants are often supplemented with 2 mg/kg/day of iron to prevent deficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which feeding issue requires referral to lactation consultant?",
        'choices'     => json_encode([
            'Cluster feeding in evening',
            'Baby always sleepy and not feeding effectively',
            'Growth on percentile curve',
            'Mild spit-up after feeds',
        ]),
        'answer'      => 'Baby always sleepy and not feeding effectively',
        'explanation' => 'Lethargy and poor feeding can indicate underlying issues requiring specialist support.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which fluid is not recommended during the first 6 months?",
        'choices'     => json_encode([
            'Breast milk',
            'Formula',
            'Plain water',
            'Juice',
        ]),
        'answer'      => 'Juice',
        'explanation' => 'Juice can displace calories and increase risk of dental caries; not recommended under 6 months.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which indicates correct nipple placement?",
        'choices'     => json_encode([
            'Nipple centred on palate',
            'Nipple aimed at roof of mouth',
            'Nipple under tongue only',
            'Nipple at front of mouth',
        ]),
        'answer'      => 'Nipple centred on palate',
        'explanation' => 'Proper positioning places nipple towards the soft palate for effective suckling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "What is the role of oxytocin in breastfeeding?",
        'choices'     => json_encode([
            'Stimulates milk production',
            'Stimulates milk ejection',
            'Suppresses hunger',
            'Thickens milk',
        ]),
        'answer'      => 'Stimulates milk ejection',
        'explanation' => 'Oxytocin causes contraction of myoepithelial cells, leading to milk let-down.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which practice reduces risk of teething bottle syndrome?",
        'choices'     => json_encode([
            'Allow falling asleep on bottle',
            'Remove bottle when infant sleeps',
            'Use sweetened liquids only',
            'Offer bottle at night frequently',
        ]),
        'answer'      => 'Remove bottle when infant sleeps',
        'explanation' => 'Removing the bottle prevents prolonged sugar exposure and dental decay.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 9,
        'question'    => "Which condition benefits most from hydrolyzed formula?",
        'choices'     => json_encode([
            'Lactose intolerance',
            'Cow’s milk protein allergy',
            'Iron deficiency',
            'Clinical dehydration',
        ]),
        'answer'      => 'Cow’s milk protein allergy',
        'explanation' => 'Extensively hydrolyzed formulas reduce allergenic potential for CMPA infants.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
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
