<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart8Seeder extends Seeder
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
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which means of egress component must be illuminated at all times during building occupancy?',
        'choices'     => json_encode([
            'Exit signs',
            'Fire extinguisher cabinets',
            'Standpipe connections',
            'Fire department connection',
        ]),
        'answer'      => 'Exit signs',
        'explanation' => 'Exit signs are required to be continuously illuminated to guide occupants to safety in an emergency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 2
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'What is the minimum fire-resistance rating for rated corridors serving ambulatory care facilities?',
        'choices'     => json_encode([
            '1 hour',
            '45 minutes',
            '2 hours',
            '30 minutes',
        ]),
        'answer'      => '1 hour',
        'explanation' => 'Ambulatory care corridors must have at least a 1-hour fire-resistance rating to ensure safe patient egress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 3
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which fire prevention measure is required for storage of compressed gas cylinders indoors?',
        'choices'     => json_encode([
            'Secure upright with chains',
            'Store horizontally',
            'Cover with plastic',
            'Place near heat sources',
        ]),
        'answer'      => 'Secure upright with chains',
        'explanation' => 'Cylinders must be secured upright to prevent tipping and valve damage, per NFPA 55.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 4
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which device must activate during smoke control system testing to verify function?',
        'choices'     => json_encode([
            'Smoke dampers',
            'Fire pumps',
            'Fire doors',
            'Exit lighting',
        ]),
        'answer'      => 'Smoke dampers',
        'explanation' => 'Smoke dampers must be tested to ensure they close on alarm and maintain compartmentation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 5
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'What is the required minimum travel distance to an exit in a sprinklered mercantile occupancy?',
        'choices'     => json_encode([
            '300 feet',
            '200 feet',
            '150 feet',
            '75 feet',
        ]),
        'answer'      => '300 feet',
        'explanation' => 'With sprinkler protection, the egress travel distance in mercantile spaces may be extended to 300 ft.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 6
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which system component must be inspected quarterly per NFPA 72?',
        'choices'     => json_encode([
            'Notification appliances',
            'Fire doors',
            'Fire pumps',
            'Standpipe hose',
        ]),
        'answer'      => 'Notification appliances',
        'explanation' => 'NFPA 72 requires quarterly testing of horns, strobes and other notification devices.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 7
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which means of egress door must swing in the direction of egress travel when serving an occupant load over 50?',
        'choices'     => json_encode([
            'Exit doors',
            'Utility room doors',
            'Mechanical room doors',
            'Storage room doors',
        ]),
        'answer'      => 'Exit doors',
        'explanation' => 'Exit doors serving over 50 occupants must swing in the direction of egress to prevent crowding.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 8
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which document outlines occupant load values for assembly areas?',
        'choices'     => json_encode([
            'Building code table',
            'NFPA 13',
            'NFPA 80',
            'Fire pump test log',
        ]),
        'answer'      => 'Building code table',
        'explanation' => 'Building codes provide tables that specify occupant load per square foot for various occupancies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 9
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which preventive practice reduces ignition risk during hot work operations?',
        'choices'     => json_encode([
            'Establish a fire watch',
            'Disable smoke detectors',
            'Remove exit signs',
            'Leave doors open',
        ]),
        'answer'      => 'Establish a fire watch',
        'explanation' => 'A fire watch monitors for sparks and embers during and after hot work to prevent fire spread.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 10
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'What is the required maximum spacing for portable fire extinguisher placement in business occupancies?',
        'choices'     => json_encode([
            '75 feet',
            '50 feet',
            '100 feet',
            '25 feet',
        ]),
        'answer'      => '75 feet',
        'explanation' => 'Portable extinguishers must be located so the travel distance does not exceed 75 ft for Class A hazards.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 11
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which device must be installed in elevator shafts to detect smoke?',
        'choices'     => json_encode([
            'Smoke detector',
            'Heat detector',
            'Flow switch',
            'Tamper switch',
        ]),
        'answer'      => 'Smoke detector',
        'explanation' => 'Elevator shaft smoke detectors prevent elevator operation during fire conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 12
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which fire prevention record must be retained for at least 5 years?',
        'choices'     => json_encode([
            'Inspection reports',
            'Daily drill logs',
            'Training attendance sheets',
            'Shift records',
        ]),
        'answer'      => 'Inspection reports',
        'explanation' => 'Codes generally require retaining fire inspection reports for a minimum of 5 years.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 13
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which corrosion control measure applies to sprinkler system piping?',
        'choices'     => json_encode([
            'Internal inspection and flushing',
            'Painting outside only',
            'Cap with plastic',
            'Never test',
        ]),
        'answer'      => 'Internal inspection and flushing',
        'explanation' => 'Flushing and internal inspections help remove debris and prevent pipe corrosion per NFPA 25.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 14
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which device is required at the top of interior exit stairways for smoke control?',
        'choices'     => json_encode([
            'Smoke damper',
            'Heat detector',
            'Manual pull station',
            'Fire extinguisher',
        ]),
        'answer'      => 'Smoke damper',
        'explanation' => 'Smoke dampers protect exit stair enclosures by closing on alarm to maintain tenable egress conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 15
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which fire safety feature must be provided in covered mall buildings?',
        'choices'     => json_encode([
            'Smoke control system',
            'Standpipe hose',
            'Cooker hoods',
            'Portable pumps',
        ]),
        'answer'      => 'Smoke control system',
        'explanation' => 'Covered malls require smoke control to limit smoke spread in large open spaces per NFPA 88A.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 16
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'What is the maximum allowed clearance under a sprinkler deflector in a storage area?',
        'choices'     => json_encode([
            '18 inches',
            '12 inches',
            '24 inches',
            '36 inches',
        ]),
        'answer'      => '18 inches',
        'explanation' => 'An 18″ clearance below deflectors ensures unobstructed spray patterns, per NFPA 13.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 17
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which component of a standpipe system must have signage indicating floor level?',
        'choices'     => json_encode([
            'Control valve',
            'Fire pump',
            'Smoke damper',
            'Exit sign',
        ]),
        'answer'      => 'Control valve',
        'explanation' => 'Standpipe control valves must be labeled with the served floor level for quick identification.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 18
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which safety device is required in mechanical dunnage pits beneath kitchens?',
        'choices'     => json_encode([
            'Class K extinguisher',
            'Smoke detector',
            'Heat detector',
            'Flow switch',
        ]),
        'answer'      => 'Smoke detector',
        'explanation' => 'Smoke detectors in dunnage pits provide early warning of grease fires under cooking equipment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 19
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which test must be performed on a pre-action sprinkler system annually?',
        'choices'     => json_encode([
            'Trip test of pre-action valve',
            'Pump churn test',
            'Smoke test',
            'Visual only',
        ]),
        'answer'      => 'Trip test of pre-action valve',
        'explanation' => 'Annual trip testing ensures pre-action valves actuate correctly under predetermined conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    // 20
    [
        'subject_id'  => 43,
        'part'        => 8,
        'question'    => 'Which egress component must have NFPA-approved panic hardware when serving a high-hazard occupancy?',
        'choices'     => json_encode([
            'Exit doors',
            'Fire pump room doors',
            'Storage room doors',
            'Mechanical room doors',
        ]),
        'answer'      => 'Exit doors',
        'explanation' => 'High-hazard occupancies require panic hardware on exits to allow rapid egress under panic conditions.',
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
            $this->command->warn("Part 8 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 8. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 8.");
    }
}
