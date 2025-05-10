<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart3Seeder extends Seeder
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
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which hazard control is MOST effective for preventing electrical fires?',
        'choices'     => json_encode([
            'Regular electrical inspections',
            'Posting “No Smoking” signs',
            'Installing additional exits',
            'Using fire-rated carpet',
        ]),
        'answer'      => 'Regular electrical inspections',
        'explanation' => 'Routine inspections identify faulty wiring or overloaded circuits before ignition occurs.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'What is the PRIMARY reason for maintaining clearance around electrical panels?',
        'choices'     => json_encode([
            'Allow safe access for maintenance and shutdown',
            'Improve aesthetics',
            'Reduce noise',
            'Increase panel lifespan',
        ]),
        'answer'      => 'Allow safe access for maintenance and shutdown',
        'explanation' => 'Adequate working space prevents accidental contact and ensures quick shutdown in an emergency.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which material is REQUIRED around storage tanks to control flammable vapors?',
        'choices'     => json_encode([
            'Ventilation system',
            'Noncombustible diking',
            'Plastic sheeting',
            'Wooden barriers',
        ]),
        'answer'      => 'Noncombustible diking',
        'explanation' => 'Diking prevents spills from spreading and controls vapor accumulation near tanks.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which fire safety feature must be tested semi-annually in high-rise buildings?',
        'choices'     => json_encode([
            'Smoke control system',
            'Exit sign bulbs',
            'Fire extinguisher gauges',
            'Kitchen hood extinguishers',
        ]),
        'answer'      => 'Smoke control system',
        'explanation' => 'High-rise smoke control systems require biannual testing to verify proper operation under fire conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'What is the MINIMUM spacing for heat detectors in an enclosed warehouse?',
        'choices'     => json_encode([
            '30 feet',
            '10 feet',
            '50 feet',
            '75 feet',
        ]),
        'answer'      => '30 feet',
        'explanation' => 'Heat detectors in open areas are typically spaced at maximum 30′ centers unless obstructions require closer placement.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which action BEST reduces fire spread in storage facilities?',
        'choices'     => json_encode([
            'Maintain aisle clearance',
            'Use wooden pallets',
            'Store combustibles in corners',
            'Allow storage near exits',
        ]),
        'answer'      => 'Maintain aisle clearance',
        'explanation' => 'Clear aisles prevent rapid fire spread and allow access for firefighting and evacuation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which fire prevention device must be UL-listed to ensure reliability?',
        'choices'     => json_encode([
            'Smoke detector',
            'Exit sign',
            'Fire extinguisher bracket',
            'Ceiling fan',
        ]),
        'answer'      => 'Smoke detector',
        'explanation' => 'UL listing verifies that detectors meet performance and safety standards for early warning.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'What is the REQUIRED clearance between sprinkler deflectors and storage commodities?',
        'choices'     => json_encode([
            '18 inches',
            '6 inches',
            '24 inches',
            '36 inches',
        ]),
        'answer'      => '18 inches',
        'explanation' => 'An 18″ clearance is required below deflectors to allow adequate spray distribution and prevent obstruction.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which record must include the date and result of each fire pump churn test?',
        'choices'     => json_encode([
            'Fire pump test log',
            'Incident report',
            'Inspection checklist',
            'Evacuation drill record',
        ]),
        'answer'      => 'Fire pump test log',
        'explanation' => 'Pump test logs document performance and are required by NFPA 25 for compliance and review.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which code section governs emergency responder radio coverage in buildings?',
        'choices'     => json_encode([
            'NFPA 1221',
            'NFPA 101',
            'NFPA 14',
            'NFPA 10',
        ]),
        'answer'      => 'NFPA 1221',
        'explanation' => 'NFPA 1221 details standards for emergency communication systems, including in-building radio coverage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which fire prevention inspection checks must be done annually for standpipe systems?',
        'choices'     => json_encode([
            'Full flow and hydrostatic tests',
            'Monthly visual check',
            'Quarterly valve operation',
            'Daily gauge reading',
        ]),
        'answer'      => 'Full flow and hydrostatic tests',
        'explanation' => 'Annual standpipe testing includes both flow and hydrostatic tests to confirm integrity and capacity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which sign is REQUIRED at every fire department connection (FDC)?',
        'choices'     => json_encode([
            '“FDC” in red letters',
            '“No Parking”',
            '“Exit”',
            '“Fire Hose”',
        ]),
        'answer'      => '“FDC” in red letters',
        'explanation' => 'FDCs must be clearly marked with red “FDC” signage for rapid identification during operations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which preventive measure reduces fire risk from hot work operations?',
        'choices'     => json_encode([
            'Fire watch during and after work',
            'Increased lighting',
            'Posting hazard signs',
            'Closing all doors',
        ]),
        'answer'      => 'Fire watch during and after work',
        'explanation' => 'A fire watch monitors for sparks and smoldering embers during and for a period after hot work.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which feature is REQUIRED on doors to fire-resistance–rated corridors?',
        'choices'     => json_encode([
            'Self-closing and latch',
            'View window',
            'Kick plate',
            'Threshold strip',
        ]),
        'answer'      => 'Self-closing and latch',
        'explanation' => 'Self-closing, latching hardware on corridor doors maintains separation during fire conditions.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which sprinkler system component must be inspected for corrosion biennially?',
        'choices'     => json_encode([
            'Pipe hangers and supports',
            'Extinguisher valves',
            'Standpipe hoses',
            'Exit lights',
        ]),
        'answer'      => 'Pipe hangers and supports',
        'explanation' => 'NFPA 25 requires BIENNIAL inspection of supports to detect corrosion that could lead to system failure.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which procedure BEST prevents unauthorized use of fire doors?',
        'choices'     => json_encode([
            'Install alarmed hold-open devices',
            'Keep them unlocked',
            'Post “Keep Closed” signs',
            'Use automatic closers only',
        ]),
        'answer'      => 'Install alarmed hold-open devices',
        'explanation' => 'Alarms sound if doors are held open without authorization, preserving barrier integrity.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which documentation is REQUIRED after every fire drill?',
        'choices'     => json_encode([
            'Date, time, duration, and participants',
            'Weather conditions',
            'Media attendance',
            'Type of extinguishers used',
        ]),
        'answer'      => 'Date, time, duration, and participants',
        'explanation' => 'Drill records must capture key data to evaluate performance and compliance.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which fire safety requirement applies to temporary tents over 900 ft²?',
        'choices'     => json_encode([
            'Permit required and fire extinguisher provided',
            'Open flame allowed',
            'No exits needed',
            'No permit required',
        ]),
        'answer'      => 'Permit required and fire extinguisher provided',
        'explanation' => 'Large tents must have permits and extinguishers per code to address increased fire risk.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which code governs the storage of hazardous compressed gases?',
        'choices'     => json_encode([
            'NFPA 55',
            'NFPA 30',
            'NFPA 101',
            'NFPA 10',
        ]),
        'answer'      => 'NFPA 55',
        'explanation' => 'NFPA 55, Compressed Gases and Cryogenic Fluids Code, sets requirements for safe gas storage.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 3,
        'question'    => 'Which preventive action is REQUIRED before hot work on sprinkler-piped areas?',
        'choices'     => json_encode([
            'Lock open and tag sprinkler valves',
            'Shut off electrical power',
            'Drain fuel tanks',
            'Ventilate building',
        ]),
        'answer'      => 'Lock open and tag sprinkler valves',
        'explanation' => 'Sprinkler valves must be secured open so inadvertent shutoff during hot work does not disable protection.',
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
