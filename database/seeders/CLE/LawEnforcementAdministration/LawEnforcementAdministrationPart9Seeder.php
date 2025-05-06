<?php

namespace Database\Seeders\CLE\LawEnforcementAdministration;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LawEnforcementAdministrationPart9Seeder extends Seeder
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

//1
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which act originally established the Philippine Constabulary in 1901?',
    'choices'     => json_encode([
        'Act No. 175',
        'Act No. 144',
        'Act No. 192',
        'Act No. 201',
    ]),
    'answer'      => 'Act No. 175',
    'explanation' => 'Act No. 175 (January 18, 1901) created the Philippine Constabulary under U.S. civil government.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//2
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'What year was the Integrated National Police merged with PC to form the PNP under RA 6975?',
    'choices'     => json_encode([
        '1991',
        '1993',
        '1995',
        '1997',
    ]),
    'answer'      => '1993',
    'explanation' => 'The PNP was fully organized in 1993, two years after RA 6975 took effect.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//3
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which principle in the police code emphasizes service before self?',
    'choices'     => json_encode([
        'Police oath principle',
        'Peelian principle',
        'Public trust doctrine',
        'Citizen’s covenant',
    ]),
    'answer'      => 'Peelian principle',
    'explanation' => 'Peelian principles underline that police exist to serve the public, not the state.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//4
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Under RA 6975, which body has disciplinary power over local police forces?',
    'choices'     => json_encode([
        'Lupong tagapamayapa',
        'Municipal mayor',
        'Provincial governor',
        'NAPOLCOM',
    ]),
    'answer'      => 'NAPOLCOM',
    'explanation' => 'NAPOLCOM retains authority to discipline PNP personnel despite local supervision.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//5
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which Republic Act amended RA 6975, strengthening NAPOLCOM functions in 1998?',
    'choices'     => json_encode([
        'RA 8551',
        'RA 7650',
        'RA 9008',
        'RA 8095',
    ]),
    'answer'      => 'RA 8551',
    'explanation' => 'RA 8551 (1998) reorganized NAPOLCOM and expanded its oversight and promotional powers.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//6
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'In RA 6975, who serves ex officio as NAPOLCOM vice-chairman?',
    'choices'     => json_encode([
        'PNP Chief',
        'DILG Undersecretary',
        'DAP Secretary',
        'DOJ Secretary',
    ]),
    'answer'      => 'PNP Chief',
    'explanation' => 'The PNP Director General serves as ex officio vice-chairman of NAPOLCOM under RA 6975.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//7
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which local official acts as deputy of NAPOLCOM in matters of police supervision?',
    'choices'     => json_encode([
        'Barangay captain',
        'City/Municipal mayor',
        'Punong barrio',
        'Sangguniang chairman',
    ]),
    'answer'      => 'City/Municipal mayor',
    'explanation' => 'Mayors function as NAPOLCOM deputies for local police administrative supervision.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//8
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which plan component addresses crowd movement control during mass demonstrations?',
    'choices'     => json_encode([
        'Ingress and egress management',
        'VIP secure corridor',
        'Raids timetable',
        'Crisis hotline setup',
    ]),
    'answer'      => 'Ingress and egress management',
    'explanation' => 'Managing entry and exit points controls crowd flow and reduces stampede risks.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//9
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'In VIP security planning, what is the term for the secure path for principal movement?',
    'choices'     => json_encode([
        'Secure corridor',
        'Escape route',
        'Buffer zone',
        'Control perimeter',
    ]),
    'answer'      => 'Secure corridor',
    'explanation' => 'Secure corridors are preplanned routes to safely move VIPs between locations.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//10
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which technique is used in planning raid operations to minimize suspect reaction time?',
    'choices'     => json_encode([
        'Simultaneous breach',
        'Staggered approach',
        'Covert surveillance only',
        'Negotiation first',
    ]),
    'answer'      => 'Simultaneous breach',
    'explanation' => 'Simultaneous breach teams enter multiple points at once to surprise and overwhelm.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//11
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'What element of disaster response planning identifies critical infrastructure to protect first?',
    'choices'     => json_encode([
        'Essential facilities list',
        'Volunteer roster',
        'Vehicle inventory',
        'Communication blackout maps',
    ]),
    'answer'      => 'Essential facilities list',
    'explanation' => 'Listing hospitals, fire stations, and utilities guides priority resource allocation.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//12
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'In crowd control, which device creates a temporary barrier to channel pedestrian flow?',
    'choices'     => json_encode([
        'Barricade fence',
        'Barbed wire',
        'Spike strip',
        'Cones only',
    ]),
    'answer'      => 'Barricade fence',
    'explanation' => 'Modular barricades guide crowds and create controlled access points.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//13
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which planning consideration ensures continuity of command during emergencies?',
    'choices'     => json_encode([
        'Succession matrix',
        'Logistics plan',
        'Traffic rerouting',
        'Media liaison',
    ]),
    'answer'      => 'Succession matrix',
    'explanation' => 'Designating alternates maintains leadership if primary commanders are incapacitated.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//14
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'What is the term for a group of officers designated to manage protester dispersal?',
    'choices'     => json_encode([
        'Crowd assault team',
        'Riot control squad',
        'Patrol unit',
        'Intelligence cell',
    ]),
    'answer'      => 'Riot control squad',
    'explanation' => 'Riot control squads are equipped and trained for non-lethal crowd dispersal.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//15
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which communication channel is reserved for incident command during large-scale events?',
    'choices'     => json_encode([
        'Incident command net',
        'Routine patrol channel',
        'Public broadcast',
        'Social media feed',
    ]),
    'answer'      => 'Incident command net',
    'explanation' => 'A dedicated net ensures clear command communications among leaders.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//16
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which document outlines the rules of engagement for police during crowd control?',
    'choices'     => json_encode([
        'Use-of-force policy',
        'Standard operating guidelines',
        'Training manual',
        'Budget circular',
    ]),
    'answer'      => 'Use-of-force policy',
    'explanation' => 'Use-of-force policies define permissible measures and escalation protocols.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//17
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'In VIP security, which post is established at a fixed location to screen entrants?',
    'choices'     => json_encode([
        'Access control point',
        'Search team',
        'Escort detail',
        'Intel hub',
    ]),
    'answer'      => 'Access control point',
    'explanation' => 'Entry screening points secure premises by checking credentials and conducting searches.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//18
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which planning aid plots routes, rendezvous points, and hazard zones on a map?',
    'choices'     => json_encode([
        'Tactical overlay chart',
        'Check-in schedule',
        'Roster list',
        'Press release',
    ]),
    'answer'      => 'Tactical overlay chart',
    'explanation' => 'Overlay charts visually integrate operational details on geographic maps.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//19
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'Which resource is critical to preposition for disaster response planning?',
    'choices'     => json_encode([
        'Emergency medical supplies',
        'Police badges',
        'Traffic cones',
        'Office stationery',
    ]),
    'answer'      => 'Emergency medical supplies',
    'explanation' => 'Medical kits, stretchers, and first-aid are lifesaving assets during disasters.',
    'created_at'  => $now,
    'updated_at'  => $now,
];

//20
$batch[] = [
    'subject_id'  => 22,
    'part'        => 9,
    'question'    => 'What mechanism allows rapid mobilization of reserve personnel in emergencies?',
    'choices'     => json_encode([
        'Standby roster',
        'Annual vacation plan',
        'Training calendar',
        'Budget proposal',
    ]),
    'answer'      => 'Standby roster',
    'explanation' => 'Standby rosters list personnel on-call for immediate deployment.',
    'created_at'  => $now,
    'updated_at'  => $now,
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
