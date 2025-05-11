<?php

namespace Database\Seeders\MPLE\SanitationPlumbingDesignAndInstallation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SanitationPlumbingDesignAndInstallationPart2Seeder extends Seeder
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
        'part'        => 2,
        'question'    => 'What minimum septic tank capacity is required for a three-bedroom single-family dwelling? (PRC standard)',
        'choices'     => json_encode([
            '3,000 L',
            '2,000 L',
            '1,500 L',
            '1,000 L',
        ]),
        'answer'      => '3,000 L',
        'explanation' => 'PRC requires 1,000 L per bedroom, so 3 bedrooms → 3,000 L minimum septic capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which type of manhole cover is preferred for pedestrian areas?',
        'choices'     => json_encode([
            'Ductile iron',
            'Cast iron',
            'Steel',
            'Fiberglass',
        ]),
        'answer'      => 'Ductile iron',
        'explanation' => 'Ductile iron covers are strong, durable, and non-brittle, ideal for pedestrian loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the minimum distance between a septic tank inlet and a property line? (PRC code)',
        'choices'     => json_encode([
            '1 m',
            '2 m',
            '3 m',
            '5 m',
        ]),
        'answer'      => '3 m',
        'explanation' => 'Septic tank inlets must be at least 3 meters from property lines to allow maintenance and avoid nuisances.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which soil test is necessary to design an absorption trench for a septic system?',
        'choices'     => json_encode([
            'Percolation test',
            'pH test',
            'Shear test',
            'Consolidation test',
        ]),
        'answer'      => 'Percolation test',
        'explanation' => 'Percolation tests determine soil absorption rates for proper trench sizing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the recommended drop per chamber in a multi-chamber septic tank?',
        'choices'     => json_encode([
            '10 mm',
            '25 mm',
            '50 mm',
            '75 mm',
        ]),
        'answer'      => '25 mm',
        'explanation' => 'A 25 mm drop ensures proper flow between chambers without excessive turbulence.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which component prevents solids from entering the distribution box?',
        'choices'     => json_encode([
            'Effluent filter',
            'Grease trap',
            'Sand interceptor',
            'Air admittance valve',
        ]),
        'answer'      => 'Effluent filter',
        'explanation' => 'Effluent filters remove solids before effluent enters the distribution box, preventing clogs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the minimum thickness for a reinforced concrete septic tank wall?',
        'choices'     => json_encode([
            '75 mm',
            '100 mm',
            '150 mm',
            '200 mm',
        ]),
        'answer'      => '150 mm',
        'explanation' => '150 mm provides adequate strength and durability against soil and hydraulic loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which test ensures a newly constructed septic tank is watertight?',
        'choices'     => json_encode([
            'Flood test',
            'Vacuum test',
            'Slump test',
            'Compression test',
        ]),
        'answer'      => 'Flood test',
        'explanation' => 'Flood tests check for leaks by filling the tank and observing water retention over 24 hours.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the standard backfill material for septic tank installation?',
        'choices'     => json_encode([
            'Clean sand',
            'Rubble',
            'Clay',
            'Topsoil',
        ]),
        'answer'      => 'Clean sand',
        'explanation' => 'Clean sand provides uniform support and prevents differential settlement around the tank.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which device is required to protect against sewer gas backup into a building?',
        'choices'     => json_encode([
            'Trap seal',
            'Backwater valve',
            'Air admittance valve',
            'Check valve',
        ]),
        'answer'      => 'Backwater valve',
        'explanation' => 'A backwater valve stops reverse flow and prevents sewer gases from entering the building.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which slope is typically provided for infiltration trenches?',
        'choices'     => json_encode([
            '0.5% (5 mm/m)',
            '1% (10 mm/m)',
            '2% (20 mm/m)',
            '4% (40 mm/m)',
        ]),
        'answer'      => '1% (10 mm/m)',
        'explanation' => 'A 1% slope allows even distribution without erosion in infiltration trenches.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the minimum clearance above a septic tank lid for inspection access?',
        'choices'     => json_encode([
            '150 mm',
            '300 mm',
            '450 mm',
            '600 mm',
        ]),
        'answer'      => '300 mm',
        'explanation' => '300 mm clearance ensures safe and convenient access for cleaning and inspection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which component in a grease interceptor must be cleaned regularly?',
        'choices'     => json_encode([
            'Baffle',
            'Effluent filter',
            'Manhole cover',
            'Inlet tee',
        ]),
        'answer'      => 'Baffle',
        'explanation' => 'Baffles trap grease and solids; they must be cleaned to maintain interceptor efficiency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the minimum horizontal distance between a leach field and a drinking water well? (PRC standard)',
        'choices'     => json_encode([
            '10 m',
            '15 m',
            '20 m',
            '25 m',
        ]),
        'answer'      => '15 m',
        'explanation' => 'A 15 m separation prevents contamination of potable water by effluent in the leach field.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the required capacity of a grease interceptor for a medium sized restaurant? (PRC guideline)',
        'choices'     => json_encode([
            '500 L',
            '1,000 L',
            '1,500 L',
            '2,000 L',
        ]),
        'answer'      => '1,500 L',
        'explanation' => 'PRC guidelines specify 1,500 L for medium flow rates to trap grease effectively.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the minimum invert depth for a building drain below the ground level? (PRC code)',
        'choices'     => json_encode([
            '150 mm',
            '200 mm',
            '300 mm',
            '400 mm',
        ]),
        'answer'      => '200 mm',
        'explanation' => '200 mm below ground protects the pipe from freezing and external loads.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which device is used to prevent trap siphonage when venting is not practical?',
        'choices'     => json_encode([
            'Air admittance valve',
            'Backwater valve',
            'Check valve',
            'Pressure vacuum breaker',
        ]),
        'answer'      => 'Air admittance valve',
        'explanation' => 'Air admittance valves admit air to prevent siphon but keep gases from escaping.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the maximum recommended spacing between cleanouts in a building sewer? (PRC)',
        'choices'     => json_encode([
            '30 m',
            '45 m',
            '60 m',
            '75 m',
        ]),
        'answer'      => '60 m',
        'explanation' => 'Cleanouts every 60 m allow access for maintenance and clearing obstructions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'What is the minimum diameter for a building sewer pipe? (PRC standard)',
        'choices'     => json_encode([
            '100 mm (4")',
            '150 mm (6")',
            '200 mm (8")',
            '250 mm (10")',
        ]),
        'answer'      => '100 mm (4")',
        'explanation' => '4-inch diameter is the smallest allowed for building sewer to handle waste flows.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 47,
        'part'        => 2,
        'question'    => 'Which fixture requires a trap primer according to PRC plumbing code?',
        'choices'     => json_encode([
            'Floor drain',
            'Kitchen sink',
            'Bathroom lavatory',
            'Toilet',
        ]),
        'answer'      => 'Floor drain',
        'explanation' => 'Floor drains often dry out; trap primers add water to the trap to maintain seal.',
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
