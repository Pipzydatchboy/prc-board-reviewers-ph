<?php

namespace Database\Seeders\FOE\FireSuppression;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FireSuppressionPart1Seeder extends Seeder
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
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'During size-up, which factor BEST indicates potential for rapid fire spread in a structure?',
    'choices'     => json_encode([
        'Interior finish materials',
        'Occupancy load',
        'Number of floors',
        'Distance to nearest hydrant',
    ]),
    'answer'      => 'Interior finish materials',
    'explanation' => 'Combustible interior finishes (e.g., plastics, fabrics) fuel and accelerate fire growth and spread.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//2
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which hose-line nozzle pattern is MOST effective for hydraulic ventilation of a compartment fire?',
    'choices'     => json_encode([
        'Straight stream',
        'Wide fog',
        'Narrow fog',
        'Solid bore',
    ]),
    'answer'      => 'Narrow fog',
    'explanation' => 'A narrow fog stream directed upward pulls superheated gases out through ventilation openings.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//3
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'What is the PRIMARY purpose of a two-in, two-out rule during interior attack?',
    'choices'     => json_encode([
        'Maintain an escape rescue team',
        'Ensure adequate manpower',
        'Control water supply',
        'Coordinate hose advance',
    ]),
    'answer'      => 'Maintain an escape rescue team',
    'explanation' => 'Two-in, two-out ensures that two firefighters remain outside ready to rescue the two inside if needed.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//4
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which pre-incident survey detail is MOST critical for planning interior attack?',
    'choices'     => json_encode([
        'Location of standpipes',
        'Building age',
        'Owner’s contact number',
        'Adjacent property uses',
    ]),
    'answer'      => 'Location of standpipes',
    'explanation' => 'Knowing standpipe outlets’ placement speeds hoseline deployment and water supply interior operations.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//5
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'When advancing a charged hoseline, the firefighter should hold the hose approximately how far behind the nozzle?',
    'choices'     => json_encode([
        '1 meter',
        '0.3 meter',
        '2 meters',
        '0.6 meter',
    ]),
    'answer'      => '0.6 meter',
    'explanation' => 'Holding about 0.6 m (2 ft) behind the nozzle gives control without interfering with operation.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//6
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'What is the recommended pump discharge pressure for a 1¾-inch handline operating at 100 psi nozzle pressure and 200 ft of ½-inch hose?',
    'choices'     => json_encode([
        '100 psi',
        '125 psi',
        '150 psi',
        '175 psi',
    ]),
    'answer'      => '150 psi',
    'explanation' => 'Allow ~50 psi for hose friction loss over 200 ft plus 100 psi nozzle pressure.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//7
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which tool combination is STANDARD for forcible entry through a locked door?',
    'choices'     => json_encode([
        'Halligan bar and flat-head axe',
        'Bolt cutters and sledgehammer',
        'Pike pole and halligan',
        'Hydraulic spreader and pry bar',
    ]),
    'answer'      => 'Halligan bar and flat-head axe',
    'explanation' => 'The “Irons” (Halligan and axe) are the universally accepted forcible-entry tools.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//8
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'During an offensive interior attack, which action should be taken FIRST upon entry?',
    'choices'     => json_encode([
        'Check for structural collapse',
        'Perform primary search',
        'Advance attack line toward seat of fire',
        'Open overhead vents',
    ]),
    'answer'      => 'Advance attack line toward seat of fire',
    'explanation' => 'Applying water to the fire is the primary objective to improve conditions for all other tasks.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//9
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which method of ventilation is MOST suitable when roof integrity is questionable?',
    'choices'     => json_encode([
        'Positive-pressure ventilation',
        'Vertical ventilation',
        'Hydraulic ventilation',
        'Horizontal ventilation',
    ]),
    'answer'      => 'Positive-pressure ventilation',
    'explanation' => 'PPV doesn’t risk cutting a roof and uses fans outside to push smoke out openings.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//10
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'What is the PRIMARY hazard when applying water to burning class B (flammable liquid) fires?',
    'choices'     => json_encode([
        'Boil-over',
        'Steam burns',
        'Fuel spread',
        'Reignition',
    ]),
    'answer'      => 'Fuel spread',
    'explanation' => 'Applying low-expansion foam or fog is needed; straight streams can spread burning fuel.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//11
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'In a coordinated attack, the back-up line should be positioned how relative to the primary line?',
    'choices'     => json_encode([
        'Close behind',
        'At a different entrance',
        'On the same stairway two floors above',
        'Adjacent in same room',
    ]),
    'answer'      => 'Close behind',
    'explanation' => 'Back-up line follows primary line closely to protect crews if they become overwhelmed.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//12
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which indicator on a thermal imaging camera BEST identifies the hottest fire area for attack?',
    'choices'     => json_encode([
        'Bright white spot',
        'Dark blue area',
        'Purple center',
        'Uniform gray',
    ]),
    'answer'      => 'Bright white spot',
    'explanation' => 'White/yellow–hot zones indicate highest temperatures and potential fire seat location.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//13
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which pre-fire planning detail directly affects pump operator’s discharge pressure settings?',
    'choices'     => json_encode([
        'Elevations of hydrants',
        'Building construction type',
        'Occupant load',
        'Interior finish class',
    ]),
    'answer'      => 'Elevations of hydrants',
    'explanation' => 'Elevation changes alter static pressure; pump settings must compensate for grade.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//14
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'What is the BEST reason to use a smooth-bore nozzle on an interior attack hoseline?',
    'choices'     => json_encode([
        'Greater reach and water penetration',
        'Better steam conversion',
        'Creates mist for cooling',
        'Reduces pump pressure',
    ]),
    'answer'      => 'Greater reach and water penetration',
    'explanation' => 'Smooth-bore streams maintain cohesive flow, penetrating deeply into burning materials.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//15
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which SCBA component must be checked FIRST before entry on a charged hoseline?',
    'choices'     => json_encode([
        'Facepiece seal',
        'Air cylinder pressure',
        'Regulator function',
        'Harness straps',
    ]),
    'answer'      => 'Facepiece seal',
    'explanation' => 'A proper facepiece seal is critical to prevent inhalation of toxic smoke and gases.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//16
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'During transitional attack, the initial exterior fog application is intended to:',
    'choices'     => json_encode([
        'Cool fire gases before entry',
        'Knock down main body of fire',
        'Wash exterior walls',
        'Flush exposures',
    ]),
    'answer'      => 'Cool fire gases before entry',
    'explanation' => 'Exterior fog applied at openings cools hot gases and reduces thermal threat prior to entry.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//17
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which hand tool is BEST for opening a ceiling during a overhead search?',
    'choices'     => json_encode([
        'Pike pole',
        'Halligan bar',
        'Flat-head axe',
        'Bolt cutters',
    ]),
    'answer'      => 'Pike pole',
    'explanation' => 'A pike pole hooks and pulls down ceiling materials safely during search and overhaul.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//18
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which statement about interior search is MOST correct?',
    'choices'     => json_encode([
        'Search team remains with hoseline',
        'Search after fire extinguished',
        'Search corridor only',
        'Search without SCBA',
    ]),
    'answer'      => 'Search team remains with hoseline',
    'explanation' => 'Search crew uses the hoseline as a lifeline and guide in low-visibility conditions.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//19
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which fire stream technique minimizes thermal shock damage to structural members?',
    'choices'     => json_encode([
        'Penciling',
        'Broken-stream',
        'Direct curtain',
        'Piercing nozzle',
    ]),
    'answer'      => 'Penciling',
    'explanation' => 'Penciling applies short pulses to cool without rapid temperature gradient that cracks materials.',
    'created_at'  => $now,
    'updated_at'  => $now,
],
//20
[
    'subject_id'  => 42,
    'part'        => 1,
    'question'    => 'Which practice ensures rapid hoseline deployment from engine to door?',
    'choices'     => json_encode([
        'Pre-connect attack line',
        'Lay supply line first',
        'Use uncharged line only',
        'Deploy deck gun',
    ]),
    'answer'      => 'Pre-connect attack line',
    'explanation' => 'Pre-connected attack lines allow firefighters to enter immediately with charged hose.',
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
