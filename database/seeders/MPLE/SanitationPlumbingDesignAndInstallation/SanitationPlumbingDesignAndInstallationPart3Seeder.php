<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart3Seeder extends Seeder
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
        'part'        => 3,
        'question'    => 'What is the minimum slope for a 3-inch building drain according to PRC plumbing code?',
        'choices'     => json_encode([
            '1/16 in/ft',
            '1/8 in/ft',
            '1/4 in/ft',
            '1/2 in/ft',
        ]),
        'answer'      => '1/8 in/ft',
        'explanation' => 'A 3" building drain requires minimum slope of 1/8" per foot for proper flow.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which fitting is used to change direction of a horizontal drain by 90°?',
        'choices'     => json_encode([
            '45° elbow',
            '90° elbow',
            'Tee',
            'Wye',
        ]),
        'answer'      => '90° elbow',
        'explanation' => 'A 90° elbow provides a right-angle change in pipe direction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the fixture unit value for a bathtub with shower head as per PRC standards?',
        'choices'     => json_encode([
            '1 FU',
            '2 FU',
            '3 FU',
            '4 FU',
        ]),
        'answer'      => '2 FU',
        'explanation' => 'A bathtub with shower head is assigned 2 fixture units for load calculations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which roof drain type incorporates a strainer to prevent debris entry?',
        'choices'     => json_encode([
            'Scupper',
            'Leader head',
            'Dome strainer',
            'Overflow drain',
        ]),
        'answer'      => 'Dome strainer',
        'explanation' => 'Dome strainers prevent leaves and debris from clogging roof drains.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the minimum size of a vent pipe serving a bathroom group (WC, lavatory, tub)?',
        'choices'     => json_encode([
            '1-1/4 inches',
            '1-1/2 inches',
            '2 inches',
            '3 inches',
        ]),
        'answer'      => '2 inches',
        'explanation' => 'A 2" vent is required to serve a bathroom group of three fixtures.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which material is prohibited in PRC plumbing installations for buried potable water lines?',
        'choices'     => json_encode([
            'PVC',
            'Copper',
            'Galvanized steel',
            'PEX',
        ]),
        'answer'      => 'Galvanized steel',
        'explanation' => 'Galvanized steel is discouraged due to corrosion and flow restriction over time.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the purpose of a trap primer?',
        'choices'     => json_encode([
            'Add water to trap to maintain seal',
            'Filter debris',
            'Prevent backflow',
            'Vent sewer gases',
        ]),
        'answer'      => 'Add water to trap to maintain seal',
        'explanation' => 'Trap primers replenish water in traps that may dry out, preserving the seal.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which valve type provides quick shutoff for domestic water lines?',
        'choices'     => json_encode([
            'Gate valve',
            'Globe valve',
            'Ball valve',
            'Check valve',
        ]),
        'answer'      => 'Ball valve',
        'explanation' => 'Ball valves offer fast quarter-turn operation for reliable shutoff.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What fixture unit rating is assigned to an automatic clothes washer?',
        'choices'     => json_encode([
            '1 FU',
            '2 FU',
            '3 FU',
            '4 FU',
        ]),
        'answer'      => '2 FU',
        'explanation' => 'Automatic clothes washers are rated at 2 fixture units for drainage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which device must be installed downstream of a water softener?',
        'choices'     => json_encode([
            'Backflow preventer',
            'Pressure regulator',
            'Check valve',
            'Vacuum breaker',
        ]),
        'answer'      => 'Backflow preventer',
        'explanation' => 'A backflow preventer protects the potable supply from contamination by softener discharge.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the minimum dimension for a cleanout access box below grade?',
        'choices'     => json_encode([
            '200x200 mm',
            '300x300 mm',
            '400x400 mm',
            '500x500 mm',
        ]),
        'answer'      => '300x300 mm',
        'explanation' => 'A 300×300 mm box provides sufficient space for cleaning tools to access the sewer.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which component reduces water pressure fluctuations in piping systems?',
        'choices'     => json_encode([
            'Air chamber',
            'Pressure regulator',
            'Surge tank',
            'Check valve',
        ]),
        'answer'      => 'Air chamber',
        'explanation' => 'Air chambers cushion pressure changes and reduce water hammer in pipes.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the required venting for a trap serving a floor drain located next to a wall?',
        'choices'     => json_encode([
            'Direct vent',
            'Revent',
            'Air admittance valve',
            'Secondary vent',
        ]),
        'answer'      => 'Revent',
        'explanation' => 'Reventing prevents trap siphonage when the trap is distant from the main vent line.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the maximum allowable operating pressure for residential water pipes? (PRC code)',
        'choices'     => json_encode([
            '500 kPa',
            '700 kPa',
            '1000 kPa',
            '1200 kPa',
        ]),
        'answer'      => '1000 kPa',
        'explanation' => 'Residential plumbing is rated up to 1000 kPa (150 psi) maximum operating pressure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which material is approved for potable water service in PRC plumbing code?',
        'choices'     => json_encode([
            'PVC-C',
            'Lead',
            'Galvanized steel',
            'Cast iron',
        ]),
        'answer'      => 'PVC-C',
        'explanation' => 'Chlorinated PVC pipe (PVC-C) is approved for potable water due to its strength and safety.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What type of valve is required on a water heater relief valve drain line?',
        'choices'     => json_encode([
            'Gate valve',
            'Globe valve',
            'Check valve',
            'No valve',
        ]),
        'answer'      => 'No valve',
        'explanation' => 'Drain lines from relief valves must have no valve installed to ensure proper operation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which test verifies proper installation of stormwater drains?',
        'choices'     => json_encode([
            'Hydrostatic test',
            'Air test',
            'Smoke test',
            'Dye test',
        ]),
        'answer'      => 'Smoke test',
        'explanation' => 'Smoke testing reveals leaks and improper connections in storm drain systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the minimum fall for a 2-inch vertical waste stack? (PRC code)',
        'choices'     => json_encode([
            '¼" per foot',
            '½" per foot',
            '1" per foot',
            'No fall required',
        ]),
        'answer'      => 'No fall required',
        'explanation' => 'Vertical stacks rely on gravity; fall is only required for horizontal piping.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'Which fixture requires a minimum 2-inch trap according to PRC code?',
        'choices'     => json_encode([
            'Kitchen sink',
            'Shower',
            'Washing machine',
            'Bar sink',
        ]),
        'answer'      => 'Kitchen sink',
        'explanation' => 'Kitchen sinks often have large solids and require a 2" trap to prevent blockage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 47,
        'part'        => 3,
        'question'    => 'What is the purpose of a pressure vacuum breaker?',
        'choices'     => json_encode([
            'Prevent backflow',
            'Regulate pressure',
            'Filter debris',
            'Vent air',
        ]),
        'answer'      => 'Prevent backflow',
        'explanation' => 'Pressure vacuum breakers stop contaminated water from being siphoned back into potable lines.',
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
            $this->command->warn("Part 3 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 3. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 3.");
    }
}
