<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       $batch = [];

       // Part 5 – Cosmetology – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the primary function of a disinfectant in cosmetology services?',
           'choices'      => json_encode([
               'Sanitize tools and surfaces',
               'Condition hair',
               'Hydrate skin',
               'Enhance color retention',
           ]),
           'answer'       => 'Sanitize tools and surfaces',
           'explanation'  => 'Disinfectants kill pathogens on implements and work areas to prevent infections.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which shampoo is formulated to neutralize brassy undertones in blonde hair?',
           'choices'      => json_encode([
               'Purple shampoo',
               'Clarifying shampoo',
               'Moisturizing shampoo',
               'Volumizing shampoo',
           ]),
           'answer'       => 'Purple shampoo',
           'explanation'  => 'Purple shampoos deposit violet pigments that counteract yellow and brassy tones.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the benefit of using a leave-in conditioner on hair?',
           'choices'      => json_encode([
               'Detangle hair and add moisture',
               'Deep cleanse scalp',
               'Strip hair color',
               'Increase frizz',
           ]),
           'answer'       => 'Detangle hair and add moisture',
           'explanation'  => 'Leave-in conditioners soften strands, making detangling easier and providing ongoing hydration.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which tool is commonly used to measure the pH level of hair or water-based solutions?',
           'choices'      => json_encode([
               'Litmus paper',
               'Ruler',
               'Scalp brush',
               'Tweezer',
           ]),
           'answer'       => 'Litmus paper',
           'explanation'  => 'Litmus papers indicate acidity or alkalinity by changing color when dipped into solutions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the minimum immersion time recommended for metal tools in a wet disinfectant solution?',
           'choices'      => json_encode([
               '10 minutes',
               '1 minute',
               '30 seconds',
               '60 minutes',
           ]),
           'answer'       => '10 minutes',
           'explanation'  => 'Most regulatory guidelines require at least 10 minutes to effectively disinfect metal implements.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which chemical is used to straighten curly hair by breaking disulfide bonds?',
           'choices'      => json_encode([
               'Thio relaxer',
               'Hydrogen peroxide',
               'Permanent wave solution',
               'Neutralizing shampoo',
           ]),
           'answer'       => 'Thio relaxer',
           'explanation'  => 'Thio relaxers contain thioglycolate chemicals that break and restructure hair bonds for straightening.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the safest method to remove acrylic nails without damaging the natural nail plate?',
           'choices'      => json_encode([
               'Soak in acetone until acrylic softens',
               'Peel off by hand',
               'File down quickly',
               'Use hot water only',
           ]),
           'answer'       => 'Soak in acetone until acrylic softens',
           'explanation'  => 'Acetone effectively dissolves acrylic, allowing safe removal without harsh force.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which skin type is characterized by large pores and visible oiliness in the T-zone?',
           'choices'      => json_encode([
               'Combination skin',
               'Dry skin',
               'Oily skin',
               'Normal skin',
           ]),
           'answer'       => 'Combination skin',
           'explanation'  => 'Combination skin has both oily areas (usually T-zone) and drier cheeks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the purpose of a patch test before applying hair dye?',
           'choices'      => json_encode([
               'Check for allergic reactions',
               'Determine hair texture',
               'Measure scalp resistance',
               'Assess hair length',
           ]),
           'answer'       => 'Check for allergic reactions',
           'explanation'  => 'Patch tests help identify potential sensitivities to dye chemicals on skin.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which makeup application enhances the cheekbones by adding warmth and depth?',
           'choices'      => json_encode([
               'Contouring',
               'Highlighting',
               'Baking',
               'Strobing',
           ]),
           'answer'       => 'Contouring',
           'explanation'  => 'Contouring uses darker shades to create shadows and define facial structure.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the recommended frequency for deep conditioning treatments on chemically treated hair?',
           'choices'      => json_encode([
               'Once a week',
               'Daily',
               'Once a month',
               'Once a year',
           ]),
           'answer'       => 'Once a week',
           'explanation'  => 'Weekly deep conditioning helps restore moisture and strength to processed hair.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which nail shape is characterized by straight sides and a flat top edge?',
           'choices'      => json_encode([
               'Square',
               'Oval',
               'Almond',
               'Stiletto',
           ]),
           'answer'       => 'Square',
           'explanation'  => 'Square nails have parallel sides and a straight free edge for a clean look.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which ingredient in facial masks helps absorb excess oil and purify pores?',
           'choices'      => json_encode([
               'Kaolin clay',
               'Hyaluronic acid',
               'Shea butter',
               'Glycerin',
           ]),
           'answer'       => 'Kaolin clay',
           'explanation'  => 'Kaolin clay draws out impurities and controls sebum production in the skin.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the main purpose of using a toner after cleansing the face?',
           'choices'      => json_encode([
               'Restore pH balance and refine pores',
               'Exfoliate dead skin',
               'Moisturize deeply',
               'Provide SPF protection',
           ]),
           'answer'       => 'Restore pH balance and refine pores',
           'explanation'  => 'Toners help normalize skin pH and tighten the appearance of pores after cleansing.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which hair coloring technique creates soft, natural-looking highlights?',
           'choices'      => json_encode([
               'Balayage',
               'Foil highlights',
               'Block coloring',
               'Ombre',
           ]),
           'answer'       => 'Balayage',
           'explanation'  => 'Balayage hand-paints color for gradual, sun-kissed effects without harsh lines.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which cosmetic product is used to set makeup and absorb excess oil?',
           'choices'      => json_encode([
               'Translucent powder',
               'Primer',
               'Serum',
               'Cream blush',
           ]),
           'answer'       => 'Translucent powder',
           'explanation'  => 'Translucent powders mattify the skin and lock makeup in place without adding color.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the recommended distance to hold a blow dryer from the hair to prevent heat damage?',
           'choices'      => json_encode([
               '15 cm',
               '5 cm',
               '30 cm',
               '1 cm',
           ]),
           'answer'       => '15 cm',
           'explanation'  => 'Holding the dryer about 15 cm away distributes heat evenly and reduces damage risks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which test is performed on a strand of hair before a chemical service to determine processing time?',
           'choices'      => json_encode([
               'Strand test',
               'Patch test',
               'Porosity test',
               'Tensile strength test',
           ]),
           'answer'       => 'Strand test',
           'explanation'  => 'Strand tests reveal how hair reacts and process time needed for chemicals.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'What is the term for the art of shaping and styling eyebrows using tweezers or wax?',
           'choices'      => json_encode([
               'Eyebrow grooming',
               'Microblading',
               'Threading',
               'Tinting',
           ]),
           'answer'       => 'Eyebrow grooming',
           'explanation'  => 'Eyebrow grooming encompasses tweezing, waxing, and trimming to shape brows.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 5 – Cosmetology – Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 5,
           'question'     => 'Which ingredient is often added to nail polishes to speed up drying time?',
           'choices'      => json_encode([
               'Isopropyl alcohol',
               'Formaldehyde',
               'Acetone',
               'Nitrocellulose',
           ]),
           'answer'       => 'Isopropyl alcohol',
           'explanation'  => 'Isopropyl alcohol helps nail polish solvents evaporate faster, reducing drying time.',
           'created_at'   => $now,
           'updated_at'   => $now,
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
