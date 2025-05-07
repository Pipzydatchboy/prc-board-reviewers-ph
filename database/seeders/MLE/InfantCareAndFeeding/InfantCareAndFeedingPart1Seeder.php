<?php

namespace Database\Seeders\MLE\InfantCareAndFeeding;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InfantCareAndFeedingPart1Seeder extends Seeder
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
        'part'        => 1,
        'question'    => "Within what time frame after birth should breastfeeding ideally be initiated?",
        'choices'     => json_encode([
            'Within the first hour',
            'Within 6 hours',
            'Within 12 hours',
            'After 24 hours',
        ]),
        'answer'      => 'Within the first hour',
        'explanation' => 'Early initiation promotes bonding, stimulates milk production, and reduces neonatal hypoglycemia.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "What is the term for the nutrient-rich first milk produced in the initial days postpartum?",
        'choices'     => json_encode([
            'Mature milk',
            'Transitional milk',
            'Colostrum',
            'Foremilk',
        ]),
        'answer'      => 'Colostrum',
        'explanation' => 'Colostrum is high in immunoglobulins and supports the infant\'s immune system.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "How often should a healthy term newborn be breastfed per 24 hours?",
        'choices'     => json_encode([
            '4-6 times',
            '6-8 times',
            '8-12 times',
            '12-16 times',
        ]),
        'answer'      => '8-12 times',
        'explanation' => 'Frequent feeding (8–12 times/day) ensures adequate intake and supports milk supply.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which feeding position helps maintain airway patency and supports latch?",
        'choices'     => json_encode([
            'Supine cradle hold',
            'Laid-back (biological nurturing)',
            'Side-lying lateral hold',
            'Football (clutch) hold',
        ]),
        'answer'      => 'Laid-back (biological nurturing)',
        'explanation' => 'Laid-back positioning uses gravity to keep the infant\'s head at breast level, promoting latch and airway safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "What is the difference between foremilk and hindmilk?",
        'choices'     => json_encode([
            'Foremilk is higher in fat than hindmilk',
            'Hindmilk is richer in fat and calories than foremilk',
            'Foremilk contains antibodies; hindmilk does not',
            'Hindmilk is produced earlier in the feed',
        ]),
        'answer'      => 'Hindmilk is richer in fat and calories than foremilk',
        'explanation' => 'As feeding progresses, milk fat content increases, providing caloric density in hindmilk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "How should expressed breast milk be stored in a household freezer?",
        'choices'     => json_encode([
            'Up to 3 days',
            'Up to 1 month',
            'Up to 6 months',
            'Up to 12 months',
        ]),
        'answer'      => 'Up to 6 months',
        'explanation' => 'Frozen breast milk is best used within 6 months to preserve nutritional quality.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which of these is a sign of effective breastfeeding in the infant?",
        'choices'     => json_encode([
            'Clicking sounds at latch',
            'Swallowing after every few sucks',
            'Refusal to release the breast',
            'Frequent hiccups',
        ]),
        'answer'      => 'Swallowing after every few sucks',
        'explanation' => 'Audible swallowing signals milk transfer and effective suckling.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "When introducing formula feeding, what concentration is appropriate for term infants?",
        'choices'     => json_encode([
            'One scoop per 2 oz water',
            'Two scoops per 4 oz water',
            'One scoop per 1 oz water',
            'Three scoops per 6 oz water',
        ]),
        'answer'      => 'One scoop per 2 oz water',
        'explanation' => 'Standard formula concentration is one scoop to two ounces of water for proper nutrient balance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "How should a bottle-fed infant be burped?",
        'choices'     => json_encode([
            'After every ounce',
            'Only at end of feed',
            'Only if spitting up occurs',
            'Before feeding',
        ]),
        'answer'      => 'After every ounce',
        'explanation' => 'Regular burping during feeds reduces gas accumulation and discomfort.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which vitamin supplement is recommended for exclusively breastfed infants starting within the first week?",
        'choices'     => json_encode([
            'Vitamin A',
            'Vitamin D',
            'Vitamin C',
            'Vitamin E',
        ]),
        'answer'      => 'Vitamin D',
        'explanation' => 'Breast milk is low in vitamin D; supplementation of 400 IU/day is advised early.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "At what age is the introduction of solid foods usually recommended?",
        'choices'     => json_encode([
            '2 months',
            '4-6 months',
            '6-8 months',
            '10-12 months',
        ]),
        'answer'      => '4-6 months',
        'explanation' => 'Solids are generally introduced around 4–6 months when developmental readiness is present.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which sign indicates an infant may be ready for weaning?",
        'choices'     => json_encode([
            'Closes mouth when spoon approaches',
            'Sits unassisted with support',
            'Refuses breast and bottle',
            'Cries during feeds',
        ]),
        'answer'      => 'Sits unassisted with support',
        'explanation' => 'Motor control around 6 months supports safe introduction of solids.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "What is a common sign of dehydration in infants?",
        'choices'     => json_encode([
            'Bulging fontanelle',
            'Sunken eyes and fontanelle',
            'Increased wet diapers',
            'Diaphoresis',
        ]),
        'answer'      => 'Sunken eyes and fontanelle',
        'explanation' => 'Sunken fontanelle and eyes indicate reduced fluid volume.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which feeding method helps prevent nipple confusion?",
        'choices'     => json_encode([
            'Alternate every feed with bottle',
            'Introduce pacifier early',
            'Delay bottle introduction until breastfeeding established',
            'Use nipple shields at every feed',
        ]),
        'answer'      => 'Delay bottle introduction until breastfeeding established',
        'explanation' => 'Waiting 3–4 weeks reduces risk of confusion and supports latch technique.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Proper positioning for syringe feeding of a preterm infant is:",
        'choices'     => json_encode([
            'Supine flat',
            'Side-lying with slight elevation',
            'Prone position',
            'Trendelenburg position',
        ]),
        'answer'      => 'Side-lying with slight elevation',
        'explanation' => 'Side-lying reduces risk of aspiration and mimics breastfeeding orientation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which assessment indicates adequate intake in a breastfed infant?",
        'choices'     => json_encode([
            '6-8 wet diapers per 24 hours',
            '2-3 wet diapers per 24 hours',
            'No stools for 5 days',
            'Excessive weight gain of 1 kg/week',
        ]),
        'answer'      => '6-8 wet diapers per 24 hours',
        'explanation' => 'Multiple wet diapers reflect sufficient hydration and milk transfer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which technique aids relief of colic in infants?",
        'choices'     => json_encode([
            'Fast, forceful feeding',
            'Gentle bicycle leg movements',
            'Strict supine positioning post-feed',
            'Delayed burping until end of feeding',
        ]),
        'answer'      => 'Gentle bicycle leg movements',
        'explanation' => 'Cycling legs and tummy support helps release gas and soothes colicky infants.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "When supplementing with formula, how should it be introduced?",
        'choices'     => json_encode([
            'Offer undiluted at every feed',
            'Mix with expressed breast milk 1:1 initially',
            'Use only at night feeds',
            'Replace breastfeeds entirely first week',
        ]),
        'answer'      => 'Mix with expressed breast milk 1:1 initially',
        'explanation' => 'Gradual introduction maintains breastfeeding while adapting to formula.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Appropriate weaning technique includes:",
        'choices'     => json_encode([
            'Abrupt cessation of feeds',
            'Gradual substitution of cup feeds',
            'Immediate switch to cow\'s milk at 6 months',
            'Offering water only after 4 months',
        ]),
        'answer'      => 'Gradual substitution of cup feeds',
        'explanation' => 'Gradual weaning supports nutritional needs and emotional adjustment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 29,
        'part'        => 1,
        'question'    => "Which immunization is recommended before hospital discharge in newborns?",
        'choices'     => json_encode([
            'Hepatitis B vaccine',
            'BCG vaccine',
            'Polio vaccine',
            'DTaP vaccine',
        ]),
        'answer'      => 'Hepatitis B vaccine',
        'explanation' => 'First dose of Hepatitis B is advised soon after birth to prevent perinatal transmission.',
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
            $this->command->warn("Part 1 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 1. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 1.");
    }
}
