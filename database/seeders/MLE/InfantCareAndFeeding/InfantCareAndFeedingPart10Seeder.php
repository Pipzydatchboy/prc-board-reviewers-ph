<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart10Seeder extends Seeder
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
        'part'        => 10,
        'question'    => "Which technique helps reduce aerophagia when bottle-feeding?",
        'choices'     => json_encode([
            'Hold bottle steeply',
            'Use paced bottle feeding',
            'Remove all air from nipple',
            'Feed in supine position',
        ]),
        'answer'      => 'Use paced bottle feeding',
        'explanation' => 'Paced feeding mimics breastfeeding rhythm and minimizes air swallowing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "What is a sign of ankyloglossia affecting feeding?",
        'choices'     => json_encode([
            'Prolonged feeds with fussing',
            'Strong, rhythmic sucks',
            'High weight gain',
            'No gag reflex',
        ]),
        'answer'      => 'Prolonged feeds with fussing',
        'explanation' => 'Tongue-tie can cause poor latch, leading to long, inefficient feeds and distress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "When should solids be introduced to minimize allergy risk?",
        'choices'     => json_encode([
            'Before 4 months',
            '4–6 months',
            'After 12 months',
            'Only after 2 years',
        ]),
        'answer'      => '4–6 months',
        'explanation' => 'Introducing solids between 4–6 months supports tolerance and reduces allergy risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which food should be avoided in the first year due to botulism risk?",
        'choices'     => json_encode([
            'Honey',
            'Mashed sweet potato',
            'Avocado puree',
            'Pea puree',
        ]),
        'answer'      => 'Honey',
        'explanation' => 'Honey may contain Clostridium botulinum spores harmful to infants under 1 year.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "What is the primary benefit of human milk oligosaccharides?",
        'choices'     => json_encode([
            'Promote gut flora',
            'Increase fat content',
            'Enhance sweetness',
            'Neutralize acid reflux',
        ]),
        'answer'      => 'Promote gut flora',
        'explanation' => 'HMO serve as prebiotics, fostering beneficial intestinal bacteria.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which sign indicates dehydration in an infant?",
        'choices'     => json_encode([
            'Moist mucous membranes',
            'Sunken fontanelle',
            'Frequent urination',
            'Bulging fontanelle',
        ]),
        'answer'      => 'Sunken fontanelle',
        'explanation' => 'Depressed fontanelle reflects reduced intracranial volume and dehydration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which method is recommended for feeding an infant with cleft palate?",
        'choices'     => json_encode([
            'Standard nipple',
            'Specialty cleft bottle',
            'Cup feeding only',
            'Syringe feeding only',
        ]),
        'answer'      => 'Specialty cleft bottle',
        'explanation' => 'Cleft-specific bottles help deliver milk without excessive air intake or aspiration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "What is the ideal method to warm formula?",
        'choices'     => json_encode([
            'Microwave oven',
            'Warm water bath',
            'Stovetop heating',
            'Room temperature rest',
        ]),
        'answer'      => 'Warm water bath',
        'explanation' => 'A water bath ensures even heating and preserves formula integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "When introducing cow's milk, at what age is recommended?",
        'choices'     => json_encode([
            '6 months',
            '12 months',
            '9 months',
            '3 months',
        ]),
        'answer'      => '12 months',
        'explanation' => 'Whole cow’s milk is advised after 12 months to meet fat and calcium needs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which vitamin is low in breast milk and requires supplementation?",
        'choices'     => json_encode([
            'Vitamin C',
            'Vitamin D',
            'Vitamin B12',
            'Vitamin A',
        ]),
        'answer'      => 'Vitamin D',
        'explanation' => 'Breast milk contains insufficient vitamin D; 400 IU/day is recommended for infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which pattern indicates possible feeding intolerance?",
        'choices'     => json_encode([
            'Soft stools',
            'Frequent, watery diarrhea',
            'Steady weight gain',
            'Regular wet diapers',
        ]),
        'answer'      => 'Frequent, watery diarrhea',
        'explanation' => 'Persistent diarrhea can signify intolerance or infection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "What is the recommended feeding schedule for a 4-week-old infant?",
        'choices'     => json_encode([
            'Every 2-3 hours on demand',
            'Every 4-5 hours strictly',
            'Only daytime feeds',
            'Once every 6 hours',
        ]),
        'answer'      => 'Every 2-3 hours on demand',
        'explanation' => 'Newborns typically feed 8–12 times per day, approximately every 2–3 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which approach helps relieve colic?",
        'choices'     => json_encode([
            'Fast feeding',
            'Gentle tummy massage',
            'Supine positioning after feed',
            'Large formula volumes',
        ]),
        'answer'      => 'Gentle tummy massage',
        'explanation' => 'Massage and bicycle leg movements can help expel trapped gas.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which condition necessitates immediate feeding cessation and medical review?",
        'choices'     => json_encode([
            'Mild spit-up',
            'Blood in vomit or stool',
            'Hiccups',
            'Content after feed',
        ]),
        'answer'      => 'Blood in vomit or stool',
        'explanation' => 'Gastrointestinal bleeding is an emergency requiring prompt evaluation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which tool tracks infant growth and feeding trends?",
        'choices'     => json_encode([
            'APGAR chart',
            'Growth and feeding log',
            'Braden scale',
            'Morse fall scale',
        ]),
        'answer'      => 'Growth and feeding log',
        'explanation' => 'Documenting weight, intake, and output helps monitor nutrition and growth.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which measure supports maternal supply under stress?",
        'choices'     => json_encode([
            'Reduce feed frequency',
            'Increase skin-to-skin contact',
            'Limit fluid intake',
            'Delay morning feeds',
        ]),
        'answer'      => 'Increase skin-to-skin contact',
        'explanation' => 'Skin-to-skin stimulates oxytocin release and supports milk production under stress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "What is the effect of early pacifier use on breastfeeding?",
        'choices'     => json_encode([
            'Enhances latch',
            'May reduce feeding time',
            'Prevents nipple confusion',
            'No impact',
        ]),
        'answer'      => 'May reduce feeding time',
        'explanation' => 'Pacifier use can shorten breastfeeding sessions but has mixed effects on supply.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which sign indicates proper bottle nipple flow?",
        'choices'     => json_encode([
            'Stream of formula',
            'Drops at moderate pace',
            'No flow without squeezing',
            'Continuous overflow',
        ]),
        'answer'      => 'Drops at moderate pace',
        'explanation' => 'Moderate drop flow allows infant control and prevents choking or overfeeding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "What is the key feature of baby-led weaning?",
        'choices'     => json_encode([
            'Pureed foods only',
            'Infant self-feeding pieces',
            'Strict portion control',
            'Delayed solids until 1 year',
        ]),
        'answer'      => 'Infant self-feeding pieces',
        'explanation' => 'Baby-led weaning encourages self-feeding of appropriately sized pieces from first introduction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 10,
        'question'    => "Which factor most influences breast milk volume?",
        'choices'     => json_encode([
            'Maternal caloric intake',
            'Infant weight alone',
            'Time of day only',
            'Bottle use frequency',
        ]),
        'answer'      => 'Maternal caloric intake',
        'explanation' => 'Adequate maternal nutrition and frequent breast emptying drive milk production.',
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
