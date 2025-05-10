<?php

namespace Database\Seeders\FOE\FireSafetyAndPrevention;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSafetyAndPreventionPart9Seeder extends Seeder
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
        'part'        => 9,
        'question'    => 'Which document must be kept on-site to demonstrate compliance with fire safety inspection requirements?',
        'choices'     => json_encode([
            'Inspection reports',
            'Purchase orders',
            'Payroll records',
            'Training schedules',
        ]),
        'answer'      => 'Inspection reports',
        'explanation' => 'Inspection reports provide evidence that required fire safety checks were performed.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //2
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'What is the maximum travel distance to a fire alarm manual pull station in an unsprinklered office?',
        'choices'     => json_encode([
            '200 feet',
            '150 feet',
            '75 feet',
            '300 feet',
        ]),
        'answer'      => '200 feet',
        'explanation' => 'Codes generally limit travel to a manual pull station to 200 feet in unsprinklered occupancies.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //3
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which preventive action reduces fire risk in telecommunication equipment rooms?',
        'choices'     => json_encode([
            'Maintain clearance around equipment',
            'Install carpet',
            'Allow food storage',
            'Disable detectors',
        ]),
        'answer'      => 'Maintain clearance around equipment',
        'explanation' => 'Adequate clearance prevents overheating and allows maintenance without interfering with fire protection.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //4
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which type of extinguisher must be installed near electrical switchgear?',
        'choices'     => json_encode([
            'Class C',
            'Class A',
            'Class B',
            'Class D',
        ]),
        'answer'      => 'Class C',
        'explanation' => 'Class C extinguishers are non-conductive and safe for energized electrical equipment.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //5
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'What is the required inspection interval for fire doors under NFPA 80?',
        'choices'     => json_encode([
            'Quarterly',
            'Monthly',
            'Annually',
            'Biennially',
        ]),
        'answer'      => 'Quarterly',
        'explanation' => 'NFPA 80 requires quarterly inspection of fire door assemblies to ensure proper operation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //6
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which device continuously monitors cylinder pressure in a sprinkler system?',
        'choices'     => json_encode([
            'Pressure switch',
            'Flow switch',
            'Tamper switch',
            'Temperature gauge',
        ]),
        'answer'      => 'Pressure switch',
        'explanation' => 'Pressure switches detect loss of system pressure and initiate alarms for sprinkler systems.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //7
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'During winter, what preventive measure protects exposed backflow preventers?',
        'choices'     => json_encode([
            'Insulation and heat trace',
            'Painting',
            'Covering with plastic only',
            'Leaving hydrant open',
        ]),
        'answer'      => 'Insulation and heat trace',
        'explanation' => 'Insulating and applying heat trace prevents freezing of backflow preventers in cold weather.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //8
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which form of documentation is required after testing emergency generator transfer switches?',
        'choices'     => json_encode([
            'Test log with date and results',
            'Hydrant flow report',
            'Evacuation diagram',
            'Incident report',
        ]),
        'answer'      => 'Test log with date and results',
        'explanation' => 'Generator transfer switch tests must be recorded with dates and outcomes for compliance records.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //9
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which preventive practice reduces fire spread in ceiling plenums?',
        'choices'     => json_encode([
            'Use of plenum-rated cable',
            'Open cable bundles',
            'Storage in plenum space',
            'Nonrated cable use',
        ]),
        'answer'      => 'Use of plenum-rated cable',
        'explanation' => 'Plenum-rated cables limit smoke and flame propagation in air-handling spaces.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //10
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which requirement applies to exit discharge surfaces?',
        'choices'     => json_encode([
            'Slip-resistant',
            'Smooth and reflective',
            'Heated',
            'Removable',
        ]),
        'answer'      => 'Slip-resistant',
        'explanation' => 'Egress paths, including exit discharges, must be slip-resistant to prevent falls during evacuation.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //11
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which code section governs the marking of fire lanes in parking areas?',
        'choices'     => json_encode([
            'NFPA 1',
            'NFPA 13',
            'NFPA 80',
            'NFPA 72',
        ]),
        'answer'      => 'NFPA 1',
        'explanation' => 'NFPA 1 specifies requirements for marking fire lanes to maintain clear access for emergency vehicles.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //12
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which hazard control is most effective for preventing dust explosions in industrial settings?',
        'choices'     => json_encode([
            'Housekeeping to remove dust accumulations',
            'Installing curtains',
            'Using wooden pallets',
            'Posting signage',
        ]),
        'answer'      => 'Housekeeping to remove dust accumulations',
        'explanation' => 'Regular cleaning prevents combustible dust layers that can ignite and explode.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //13
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which fire safety feature must be tested for path integrity in a mass notification system?',
        'choices'     => json_encode([
            'Notification speaker circuits',
            'Fire doors',
            'Sprinkler heads',
            'Standpipe valves',
        ]),
        'answer'      => 'Notification speaker circuits',
        'explanation' => 'Mass notification systems require end-to-end verification of speaker circuits for message delivery.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //14
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which preventive practice reduces corrosion in sprinkler cross-main piping?',
        'choices'     => json_encode([
            'Regular flushing at low points',
            'Painting exterior only',
            'Adding antifreeze',
            'Never testing',
        ]),
        'answer'      => 'Regular flushing at low points',
        'explanation' => 'Flushing removes sediment and water at low points, preventing internal corrosion.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //15
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which item must be documented in a fire watch log during hot work operations?',
        'choices'     => json_encode([
            'Start and end times',
            'Number of occupants',
            'Evacuation routes',
            'Fuel inventory',
        ]),
        'answer'      => 'Start and end times',
        'explanation' => 'Hot work logs require recording the duration to ensure continuous monitoring during and after work.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //16
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which fire safety feature must be provided at every exit stair landing?',
        'choices'     => json_encode([
            'Landing level signage',
            'Smoke detector',
            'Fire pump',
            'Standpipe outlet',
        ]),
        'answer'      => 'Landing level signage',
        'explanation' => 'Signage at landings assists occupants and responders in identifying floor levels during egress.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //17
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which code requires alarm notifications during fire door release testing?',
        'choices'     => json_encode([
            'NFPA 80',
            'NFPA 72',
            'NFPA 13',
            'NFPA 101',
        ]),
        'answer'      => 'NFPA 72',
        'explanation' => 'NFPA 72 mandates notification appliances to operate when fire doors release during testing.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //18
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which preventive action reduces risk of electrical fires in data centers?',
        'choices'     => json_encode([
            'Thermal imaging surveys of cable trays',
            'Installing carpet under racks',
            'Storing combustibles nearby',
            'Blocking ventilation',
        ]),
        'answer'      => 'Thermal imaging surveys of cable trays',
        'explanation' => 'Thermal scans detect hot spots before failure and fire ignition in electrical installations.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //19
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which fire safety device must sound locally when water flow activates in a sprinkler system?',
        'choices'     => json_encode([
            'Water-flow alarm bell',
            'Smoke detector',
            'Tamper switch',
            'Manual pull station',
        ]),
        'answer'      => 'Water-flow alarm bell',
        'explanation' => 'A local alarm bell notifies occupants and responders of sprinkler water flow events.',
        'created_at'  => $now,
        'updated_at'  => $now,
    ],
    //20
    [
        'subject_id'  => 43,
        'part'        => 9,
        'question'    => 'Which record must fire watch personnel maintain during shutdown of fire protection systems?',
        'choices'     => json_encode([
            'Continuous log of observations',
            'Weekly pump test report',
            'Monthly inspection checklist',
            'Annual audit report',
        ]),
        'answer'      => 'Continuous log of observations',
        'explanation' => 'Fire watch logs document constant monitoring and findings when systems are offline.',
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
            $this->command->warn("Part 9 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 9. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 9.");
    }
}
