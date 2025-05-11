<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart1Seeder extends Seeder
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
    // 1
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which type of vent is used to relieve pressure within a drainage system and admit air to prevent siphoning of traps?',
        'choices'     => json_encode([
            'Stack vent',
            'Circuit vent',
            'Relief vent',
            'Combination vent',
        ]),
        'answer'      => 'Relief vent',
        'explanation' => 'A relief vent is installed on a fixture drain between the trap and the vent stack to relieve pressure and admit air, preventing trap siphoning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What is the minimum slope required for a 4-inch horizontal soil pipe according to PRC standards?',
        'choices'     => json_encode([
            '1/16 in/ft',
            '1/8 in/ft',
            '1/4 in/ft',
            '1/2 in/ft',
        ]),
        'answer'      => '1/8 in/ft',
        'explanation' => 'A 4-inch horizontal soil pipe must slope at least 1/8 inch per foot to ensure proper drainage and prevent solids accumulation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which material is commonly used for underground drainage due to its resistance to corrosion and root intrusion?',
        'choices'     => json_encode([
            'Cast iron',
            'PVC',
            'Copper',
            'Galvanized steel',
        ]),
        'answer'      => 'PVC',
        'explanation' => 'PVC pipe is light, corrosion-resistant, and smooth, making it ideal for underground drainage and minimizing root penetration.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'In plumbing design, what does "fixture unit" represent?',
        'choices'     => json_encode([
            'Flow rate',
            'Drainage capacity',
            'Water pressure',
            'Pipe diameter',
        ]),
        'answer'      => 'Drainage capacity',
        'explanation' => 'A fixture unit is a measure of the probable discharge into the drainage system by a fixture at a given time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What is the standard trap seal depth for a water closet (WC) as per PRC guidelines?',
        'choices'     => json_encode([
            '2 inches',
            '3 inches',
            '4 inches',
            '6 inches',
        ]),
        'answer'      => '3 inches',
        'explanation' => 'A water closet requires a minimum trap seal depth of 3 inches to prevent sewer gases from entering the building.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Where should a cleanout be installed in a horizontal drain line exceeding 100 feet?',
        'choices'     => json_encode([
            'Every 50 ft',
            'Every 75 ft',
            'Every 100 ft',
            'At changes of direction greater than 45°',
        ]),
        'answer'      => 'Every 100 ft',
        'explanation' => 'Cleanouts must be provided at intervals not exceeding 100 feet in any horizontal drainage line for maintenance access.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What is the difference between a soil pipe and a waste pipe?',
        'choices'     => json_encode([
            'Soil pipe carries sewage; waste pipe carries gray water',
            'Soil pipe is vertical only; waste pipe is horizontal only',
            'Soil pipe is cast iron; waste pipe is PVC',
            'No difference',
        ]),
        'answer'      => 'Soil pipe carries sewage; waste pipe carries gray water',
        'explanation' => 'Soil pipes convey fecal matter from water closets; waste pipes carry water waste from other fixtures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What is the minimum vent pipe diameter for a single fixture unit?',
        'choices'     => json_encode([
            '1 inch',
            '1-1/4 inches',
            '1-1/2 inches',
            '2 inches',
        ]),
        'answer'      => '1-1/4 inches',
        'explanation' => 'The smallest vent pipe permitted is 1-1/4 inches for fixtures with one fixture unit according to PRC plumbing code.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which type of backflow prevention device is typically required for a boiler feed line?',
        'choices'     => json_encode([
            'Air gap',
            'Double check valve',
            'Reduced pressure zone device',
            'Vacuum breaker',
        ]),
        'answer'      => 'Reduced pressure zone device',
        'explanation' => 'A reduced pressure zone device prevents backflow from boiler water into the potable supply by maintaining a pressure differential.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What is an air gap in plumbing installations?',
        'choices'     => json_encode([
            'A vent opening',
            'A physical separation between water outlet and flood-level rim',
            'A pipe fitting',
            'An automatic valve',
        ]),
        'answer'      => 'A physical separation between water outlet and flood-level rim',
        'explanation' => 'An air gap prevents backflow by ensuring the water outlet is above the flood-level rim of the fixture.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What term describes the lowest point of an inside building drain?',
        'choices'     => json_encode([
            'Invert',
            'Hub',
            'Slope',
            'Grade',
        ]),
        'answer'      => 'Invert',
        'explanation' => 'The invert is the inside bottom of a drainage pipe, indicating flow direction and slope measurement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which fitting is used to join two pipes of different diameters?',
        'choices'     => json_encode([
            'Coupling',
            'Reducer',
            'Connector',
            'Bushing',
        ]),
        'answer'      => 'Reducer',
        'explanation' => 'A reducer fitting connects pipes of varying diameters, maintaining flow continuity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'According to PRC code, what is the maximum length of a trap arm before venting?',
        'choices'     => json_encode([
            '2 feet',
            '3 feet',
            '4 feet',
            '6 feet',
        ]),
        'answer'      => '4 feet',
        'explanation' => 'The trap arm cannot exceed 4 feet from trap weir to vent to prevent siphoning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which fixture unit value is assigned to a standard kitchen sink?',
        'choices'     => json_encode([
            '1 FU',
            '2 FU',
            '3 FU',
            '4 FU',
        ]),
        'answer'      => '2 FU',
        'explanation' => 'A standard kitchen sink is rated at 2 fixture units for drainage load calculations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What device protects a plumbing system from frozen water in outdoor hose bibs?',
        'choices'     => json_encode([
            'Frost-proof hydrant',
            'Vacuum breaker',
            'Check valve',
            'Air admittance valve',
        ]),
        'answer'      => 'Frost-proof hydrant',
        'explanation' => 'A frost-proof hydrant has a long stem that locates the valve below the frost line to prevent freezing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which code requirement mandates an accessible opening for cleaning and inspection of a building sewer?',
        'choices'     => json_encode([
            'Cleanout',
            'Manhole',
            'Access panel',
            'Inspection port',
        ]),
        'answer'      => 'Cleanout',
        'explanation' => 'Cleanouts are required at base of stacks and horizontal lines for maintenance access to the building sewer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What is the primary purpose of a vent stack in a drainage system?',
        'choices'     => json_encode([
            'Carry waste water',
            'Provide water seal',
            'Ventilate sewer gases',
            'Support pipes',
        ]),
        'answer'      => 'Ventilate sewer gases',
        'explanation' => 'A vent stack allows sewer gases to escape above the roof and admits air to the drainage system.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which slope is recommended for a 2-inch plastic waste line?',
        'choices'     => json_encode([
            '1/16 in/ft',
            '1/8 in/ft',
            '1/4 in/ft',
            '1/2 in/ft',
        ]),
        'answer'      => '1/4 in/ft',
        'explanation' => 'A 2-inch plastic waste line requires at least 1/4 inch per foot slope to ensure adequate drainage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'What fixture unit load does a standard urinal without flush valve have?',
        'choices'     => json_encode([
            '1 FU',
            '2 FU',
            '3 FU',
            '4 FU',
        ]),
        'answer'      => '1 FU',
        'explanation' => 'A urinal without flush valve is assigned 1 fixture unit for drainage load purposes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 47,
        'part'        => 1,
        'question'    => 'Which component prevents the backing up of sewage into fixtures when sewer flow reverses?',
        'choices'     => json_encode([
            'Check valve',
            'Air admittance valve',
            'Backwater valve',
            'Pressure vacuum breaker',
        ]),
        'answer'      => 'Backwater valve',
        'explanation' => 'A backwater valve permits flow in one direction and prevents sewage backflow into the plumbing system.',
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
