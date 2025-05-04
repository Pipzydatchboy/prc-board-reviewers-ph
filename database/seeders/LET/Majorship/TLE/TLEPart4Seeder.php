<?php

namespace Database\Seeders\LET\Majorship\TLE;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TLEPart4Seeder extends Seeder
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

       // Part 4 – Basic Plumbing – Question 1
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which material is commonly used for potable water supply pipes due to its corrosion resistance?',
           'choices'      => json_encode([
               'PVC',
               'Galvanized iron',
               'Copper',
               'Lead',
           ]),
           'answer'       => 'Copper',
           'explanation'  => 'Copper tubing resists corrosion and is safe for drinking water applications.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 2
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'What is the purpose of a trap in a drainage system?',
           'choices'      => json_encode([
               'Prevent backflow of water',
               'Filter solid waste',
               'Maintain water seal to block sewer gases',
               'Regulate water pressure',
           ]),
           'answer'       => 'Maintain water seal to block sewer gases',
           'explanation'  => 'Traps hold a water seal to prevent foul sewer gases from entering occupied spaces.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 3
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which tool is used to cut threaded fittings on metal pipes?',
           'choices'      => json_encode([
               'Pipe wrench',
               'Basin wrench',
               'Tube cutter',
               'Die and tap set',
           ]),
           'answer'       => 'Die and tap set',
           'explanation'  => 'A die cuts external threads on pipes, and a tap cuts internal threads in fittings.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 4
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'What is the minimum slope for horizontal drain pipes to ensure proper flow?',
           'choices'      => json_encode([
               '1/4 inch per foot',
               '1/8 inch per foot',
               '1/2 inch per foot',
               '1 inch per foot',
           ]),
           'answer'       => '1/4 inch per foot',
           'explanation'  => 'A 1/4″ per foot slope provides adequate gravity drainage without trapping solids.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 5
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which valve type is used to completely stop or allow flow with minimal pressure drop?',
           'choices'      => json_encode([
               'Globe valve',
               'Gate valve',
               'Needle valve',
               'Check valve',
           ]),
           'answer'       => 'Gate valve',
           'explanation'  => 'Gate valves offer full flow when open and sealing when closed, with low resistance.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 6
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which substance is used to seal threaded pipe joints in water piping?',
           'choices'      => json_encode([
               'Pipe dope',
               'Epoxy resin',
               'Silicone caulk',
               'Rubber gasket',
           ]),
           'answer'       => 'Pipe dope',
           'explanation'  => 'Pipe dope (thread sealant) lubricates and seals threads to prevent leaks.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 7
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'What is the standard test pressure for checking potable water piping installations?',
           'choices'      => json_encode([
               '150 psi',
               '100 psi',
               '50 psi',
               '200 psi',
           ]),
           'answer'       => '150 psi',
           'explanation'  => 'Many codes require a 150 psi hydrostatic test to ensure pipe integrity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 8
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which fitting is used to change pipe direction by 90 degrees?',
           'choices'      => json_encode([
               'Coupling',
               'Union',
               'Elbow',
               'Tee',
           ]),
           'answer'       => 'Elbow',
           'explanation'  => 'An elbow fitting redirects piping at right angles.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 9
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which tool is specifically designed to remove obstructions inside pipes?',
           'choices'      => json_encode([
               'Auger (plumber’s snake)',
               'Chisel',
               'Pipe cutter',
               'Hacksaw',
           ]),
           'answer'       => 'Auger (plumber’s snake)',
           'explanation'  => 'A plumber’s snake clears blockages deep within pipes.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 10
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'What is the common slope requirement for soil (sewer) lines in residential plumbing?',
           'choices'      => json_encode([
               '1/8 inch per foot',
               '1/4 inch per foot',
               '3/16 inch per foot',
               '1/2 inch per foot',
           ]),
           'answer'       => '1/4 inch per foot',
           'explanation'  => 'Soil lines typically slope 1/4″ per foot to ensure proper gravity flow.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 11
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which venting component prevents trap siphonage by allowing air into the drainage system?',
           'choices'      => json_encode([
               'Vent stack',
               'Cleanout',
               'Backflow preventer',
               'Strainer',
           ]),
           'answer'       => 'Vent stack',
           'explanation'  => 'Vent stacks equalize pressure and prevent trap seals from being sucked dry.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 12
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which plumbing fixture uses a float-operated valve to maintain water level?',
           'choices'      => json_encode([
               'Toilet tank',
               'Bathtub',
               'Sink basin',
               'Floor drain',
           ]),
           'answer'       => 'Toilet tank',
           'explanation'  => 'A float valve controls fill valve action in a toilet tank.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 13
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'What is the purpose of a backflow preventer in potable water systems?',
           'choices'      => json_encode([
               'Ensure one-way flow to avoid contamination',
               'Regulate water temperature',
               'Filter sediment',
               'Increase pressure',
           ]),
           'answer'       => 'Ensure one-way flow to avoid contamination',
           'explanation'  => 'Backflow preventers stop contaminated water from re-entering the clean supply.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 14
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which chemical is commonly used to dissolve organic blockages in drains?',
           'choices'      => json_encode([
               'Caustic soda (lye)',
               'Bleach',
               'Hydrochloric acid',
               'Sodium chloride',
           ]),
           'answer'       => 'Caustic soda (lye)',
           'explanation'  => 'Caustic soda saponifies grease and breaks down organic matter in clogs.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 15
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which record shows the layout and piping diagram of a building’s plumbing system?',
           'choices'      => json_encode([
               'Riser diagram',
               'Elevation drawing',
               'Site plan',
               'Electrical schematic',
           ]),
           'answer'       => 'Riser diagram',
           'explanation'  => 'Riser diagrams chart vertical piping runs and fixture connections through floors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 16
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which measurement tool is used to verify pipe diameter on-site?',
           'choices'      => json_encode([
               'Vernier caliper',
               'Tape measure',
               'Protractor',
               'Level',
           ]),
           'answer'       => 'Vernier caliper',
           'explanation'  => 'Vernier calipers provide precise internal and external diameter measurements.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 17
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which safety practice should be followed when soldering copper joints?',
           'choices'      => json_encode([
               'Use lead-based solder',
               'Wear eye protection and work in ventilated area',
               'Use open flames near flammable materials',
               'Apply solder without flux',
           ]),
           'answer'       => 'Wear eye protection and work in ventilated area',
           'explanation'  => 'Soldering emits fumes and sparks; PPE and ventilation protect the plumber.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 18
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which fitting connects pipes of different diameters?',
           'choices'      => json_encode([
               'Reducer',
               'Coupling',
               'Elbow',
               'Union',
           ]),
           'answer'       => 'Reducer',
           'explanation'  => 'Reducers step pipe sizes up or down between two different diameters.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 19
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which component prevents water hammer in pumped systems?',
           'choices'      => json_encode([
               'Air chamber or arrestor',
               'Check valve',
               'Pressure gauge',
               'Flow meter',
           ]),
           'answer'       => 'Air chamber or arrestor',
           'explanation'  => 'Air chambers cushion sudden changes in flow, absorbing shock in the system.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Basic Plumbing – Question 20
       $batch[] = [
           'subject_id'   => 16,
           'part'         => 4,
           'question'     => 'Which document outlines code requirements for plumbing installations in the Philippines?',
           'choices'      => json_encode([
               'Philippine Plumbing Code',
               'National Building Code',
               'Electrical Code',
               'Fire Code',
           ]),
           'answer'       => 'Philippine Plumbing Code',
           'explanation'  => 'The Philippine Plumbing Code sets standards for design, materials, and installation practices.',
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
