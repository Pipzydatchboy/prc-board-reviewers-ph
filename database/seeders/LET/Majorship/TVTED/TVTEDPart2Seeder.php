<?php

namespace Database\Seeders\LET\Majorship\TVTED;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TVTEDPart2Seeder extends Seeder
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

       // Part 2 – Home Economics – Question 1
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which nutrient is essential for building and repairing body tissues?',
           'choices'      => json_encode([
               'Protein',
               'Carbohydrate',
               'Fat',
               'Fiber',
           ]),
           'answer'       => 'Protein',
           'explanation'  => 'Proteins supply amino acids necessary for tissue growth and repair.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 2
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'What is the recommended safe minimum internal temperature for cooked poultry (°C)?',
           'choices'      => json_encode([
               '74 °C',
               '63 °C',
               '85 °C',
               '70 °C',
           ]),
           'answer'       => '74 °C',
           'explanation'  => 'Poultry must reach at least 74 °C internally to kill harmful bacteria.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 3
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which cleaning agent is best for removing grease from kitchen countertops?',
           'choices'      => json_encode([
               'Degreasing detergent',
               'Neutral pH soap',
               'Vinegar solution',
               'Abrasive powder',
           ]),
           'answer'       => 'Degreasing detergent',
           'explanation'  => 'Degreasing detergents break down oils and food residues effectively.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 4
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'What is the primary purpose of blanching vegetables before freezing?',
           'choices'      => json_encode([
               'Inactivate enzymes',
               'Enhance color',
               'Add flavor',
               'Remove moisture',
           ]),
           'answer'       => 'Inactivate enzymes',
           'explanation'  => 'Blanching stops enzymatic activity that causes loss of color and nutrients.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 5
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which fabric is most suitable for absorbing moisture and wicking it away from skin?',
           'choices'      => json_encode([
               'Cotton',
               'Polyester',
               'Wool',
               'Nylon',
           ]),
           'answer'       => 'Cotton',
           'explanation'  => 'Cotton fibers are highly absorbent and comfortable next to the skin.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 6
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'What home management principle involves planning, organizing, directing, and controlling household resources?',
           'choices'      => json_encode([
               'Household management',
               'Budgeting only',
               'Decoration',
               'Handicraft',
           ]),
           'answer'       => 'Household management',
           'explanation'  => 'Effective home management applies managerial functions to household tasks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 7
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which vitamin is synthesized by human skin upon sun exposure?',
           'choices'      => json_encode([
               'Vitamin D',
               'Vitamin A',
               'Vitamin C',
               'Vitamin K',
           ]),
           'answer'       => 'Vitamin D',
           'explanation'  => 'UVB rays convert 7-dehydrocholesterol to vitamin D3 in the skin.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 8
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'In sewing, what stitch is commonly used for basting or temporary seams?',
           'choices'      => json_encode([
               'Running stitch',
               'Backstitch',
               'Overlock stitch',
               'Blind hem stitch',
           ]),
           'answer'       => 'Running stitch',
           'explanation'  => 'Running stitches are quick, easy to remove, and ideal for temporary holds.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 9
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which method of food storage prevents freezer burn by removing air from packaging?',
           'choices'      => json_encode([
               'Vacuum sealing',
               'Refrigeration',
               'Canning',
               'Jarring',
           ]),
           'answer'       => 'Vacuum sealing',
           'explanation'  => 'Vacuum-sealed packaging reduces oxidation and ice crystal formation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 10
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'What is the term for the practice of using leftover food items to create a new dish?',
           'choices'      => json_encode([
               'Culinary recycling',
               'Food preservation',
               'Leftover makeover',
               'Recipe formulation',
           ]),
           'answer'       => 'Culinary recycling',
           'explanation'  => 'Culinary recycling reduces waste by repurposing leftovers into new meals.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 11
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which household budget category typically has the highest monthly expense?',
           'choices'      => json_encode([
               'Housing',
               'Entertainment',
               'Education',
               'Clothing',
           ]),
           'answer'       => 'Housing',
           'explanation'  => 'Housing costs, including rent or mortgage, usually constitute the largest portion.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 12
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which cleaning technique uses steam to sanitize surfaces without chemicals?',
           'choices'      => json_encode([
               'Steam cleaning',
               'Ultrasonic cleaning',
               'Dry dusting',
               'Pressure washing',
           ]),
           'answer'       => 'Steam cleaning',
           'explanation'  => 'High-temperature steam kills microbes and loosens dirt effectively.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 13
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which practice helps extend the shelf life of perishable produce at home?',
           'choices'      => json_encode([
               'Refrigeration at 4 °C',
               'Storing at room temperature',
               'Wrapping in plastic wrap only',
               'Washing before storage',
           ]),
           'answer'       => 'Refrigeration at 4 °C',
           'explanation'  => 'Keeping produce at 4 °C slows bacterial growth and respiration.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 14
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'What sewing technique prevents fabric edges from fraying?',
           'choices'      => json_encode([
               'Overlocking (serging)',
               'Running stitch',
               'Basting',
               'Topstitching',
           ]),
           'answer'       => 'Overlocking (serging)',
           'explanation'  => 'Serging trims and encloses raw edges with thread to prevent unraveling.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 15
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which technique minimizes wrinkles when storing bed linens?',
           'choices'      => json_encode([
               'Rolling',
               'Folding flat',
               'Hanging',
               'Balling up',
           ]),
           'answer'       => 'Rolling',
           'explanation'  => 'Rolling bed linens reduces creases and saves space.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 16
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'On a garment care label, what does a circle with a letter “P” inside indicate?',
           'choices'      => json_encode([
               'Dry clean with perchloroethylene',
               'Do not wash',
               'Tumble dry',
               'Iron at low temperature',
           ]),
           'answer'       => 'Dry clean with perchloroethylene',
           'explanation'  => 'The “P” symbol designates professional dry cleaning with specific solvent.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 17
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which parenting style is characterized by high responsiveness and high demands?',
           'choices'      => json_encode([
               'Authoritative',
               'Authoritarian',
               'Permissive',
               'Neglectful',
           ]),
           'answer'       => 'Authoritative',
           'explanation'  => 'Authoritative parents set clear standards while being supportive and communicative.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 18
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which consumer right protects individuals against hazardous products?',
           'choices'      => json_encode([
               'Right to safety',
               'Right to choose',
               'Right to information',
               'Right to redress',
           ]),
           'answer'       => 'Right to safety',
           'explanation'  => 'The right to safety ensures protection from products that pose risks to health and life.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 19
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'Which Republic Act is also known as the Consumer Act of the Philippines?',
           'choices'      => json_encode([
               'RA 7394',
               'RA 9513',
               'RA 9003',
               'RA 6657',
           ]),
           'answer'       => 'RA 7394',
           'explanation'  => 'RA 7394, enacted in 1992, protects consumer interests and ensures fair trade practices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 2 – Home Economics – Question 20
       $batch[] = [
           'subject_id'   => 17,
           'part'         => 2,
           'question'     => 'What does FIFO stand for in food storage practices?',
           'choices'      => json_encode([
               'First In, First Out',
               'Fast In, Fast Out',
               'First In, Fast Out',
               'Fresh In, Fresh Out',
           ]),
           'answer'       => 'First In, First Out',
           'explanation'  => 'FIFO ensures older items are used before newer ones to minimize spoilage.',
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
