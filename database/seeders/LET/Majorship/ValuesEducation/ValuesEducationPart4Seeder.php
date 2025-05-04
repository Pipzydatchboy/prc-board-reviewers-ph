<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart4Seeder extends Seeder
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

       // Part 4 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which agent is considered the first and most significant influencer of a child’s values?',
           'choices'      => json_encode([
               'School',
               'Family',
               'Media',
               'Peers',
           ]),
           'answer'       => 'Family',
           'explanation'  => 'Family provides the initial environment where children learn basic values through modeling and reinforcement.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which institution shapes values via both formal curriculum and hidden curriculum?',
           'choices'      => json_encode([
               'Government',
               'Media',
               'School',
               'Church',
           ]),
           'answer'       => 'School',
           'explanation'  => 'Schools teach values explicitly through subjects and implicitly through norms, rules, and role modeling.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which social institution transmits values through religious teachings and communal rituals?',
           'choices'      => json_encode([
               'Church',
               'Peer group',
               'Media',
               'Market',
           ]),
           'answer'       => 'Church',
           'explanation'  => 'Religious institutions convey moral values, ethical guidelines, and communal norms through teachings and ceremonies.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which group exerts peer pressure that strongly shapes values and behavior during adolescence?',
           'choices'      => json_encode([
               'Media',
               'Family',
               'Peers',
               'Government',
           ]),
           'answer'       => 'Peers',
           'explanation'  => 'Adolescents often look to peers for acceptance, adopting similar values and behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which factor influences values through news, entertainment, and advertising?',
           'choices'      => json_encode([
               'School',
               'Media',
               'Family',
               'Peers',
           ]),
           'answer'       => 'Media',
           'explanation'  => 'Mass media shapes perceptions and norms by presenting narratives, images, and messages repeatedly.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which community practice strengthens values through shared rituals and traditions?',
           'choices'      => json_encode([
               'Cultural festivals',
               'Legislation',
               'Private tutoring',
               'Online forums',
           ]),
           'answer'       => 'Cultural festivals',
           'explanation'  => 'Participating in festivals reinforces communal bonds and shared values passed across generations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which digital platform can rapidly disseminate values and norms globally?',
           'choices'      => json_encode([
               'Social media',
               'Print newspapers',
               'Town hall meetings',
               'Local radio',
           ]),
           'answer'       => 'Social media',
           'explanation'  => 'Social media spreads information quickly, exposing users to diverse values and behaviors worldwide.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which process describes the spread of cultural values between societies?',
           'choices'      => json_encode([
               'Globalization',
               'Urbanization',
               'Cultural diffusion',
               'Isolationism',
           ]),
           'answer'       => 'Cultural diffusion',
           'explanation'  => 'Cultural diffusion involves adopting beliefs, practices, and values from other cultures.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which economic factor may lead to prioritizing material values over communal values?',
           'choices'      => json_encode([
               'Consumerism',
               'Subsistence farming',
               'Barter trade',
               'Non-market exchange',
           ]),
           'answer'       => 'Consumerism',
           'explanation'  => 'Consumerism emphasizes material acquisition, often shifting focus from community welfare.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which governing body\'s policies and programs influence national values through civic education?',
           'choices'      => json_encode([
               'Non-governmental organizations',
               'Local businesses',
               'Government agencies',
               'International corporations',
           ]),
           'answer'       => 'Government agencies',
           'explanation'  => 'Government bodies shape values via legislation, public campaigns, and school curricula mandates.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which factor can weaken traditional values due to increased cross-cultural interactions?',
           'choices'      => json_encode([
               'Globalization',
               'Local isolation',
               'Rural migration',
               'Subsistence living',
           ]),
           'answer'       => 'Globalization',
           'explanation'  => 'Globalization exposes societies to diverse values, sometimes eroding local traditions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which learning mechanism involves acquiring values by observing others?',
           'choices'      => json_encode([
               'Classical conditioning',
               'Operant conditioning',
               'Social learning',
               'Insight learning',
           ]),
           'answer'       => 'Social learning',
           'explanation'  => 'Social learning theory states that individuals learn behaviors and values by modeling others.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which concept highlights the influence of moral exemplars on character development?',
           'choices'      => json_encode([
               'Role modeling',
               'Peer pressure',
               'Cognitive dissonance',
               'Moral hazard',
           ]),
           'answer'       => 'Role modeling',
           'explanation'  => 'Role modeling involves learning values by emulating admired individuals.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which societal source of values is enforced through laws and regulations?',
           'choices'      => json_encode([
               'Legal system',
               'Family',
               'School',
               'Media',
           ]),
           'answer'       => 'Legal system',
           'explanation'  => 'The legal system codifies societal values into enforceable rules and penalties.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which psychological factor uses reinforcement and punishment to shape value-based behaviors?',
           'choices'      => json_encode([
               'Classical conditioning',
               'Operant conditioning',
               'Insight learning',
               'Social learning',
           ]),
           'answer'       => 'Operant conditioning',
           'explanation'  => 'Operant conditioning modifies behavior through rewards and consequences, influencing values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which family influence involves parents setting examples for children to follow?',
           'choices'      => json_encode([
               'Parental role modeling',
               'Peer mentoring',
               'Media consumption',
               'School assessment',
           ]),
           'answer'       => 'Parental role modeling',
           'explanation'  => 'Children internalize values by observing and imitating parents’ behaviors.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which social factor arises from mass migration and diaspora, influencing value adaptation?',
           'choices'      => json_encode([
               'Urbanization',
               'Migration',
               'Globalization',
               'Industrialization',
           ]),
           'answer'       => 'Migration',
           'explanation'  => 'Migration exposes individuals to new cultures and values, prompting adaptation and change.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which factor influences values through participation in local cultural celebrations?',
           'choices'      => json_encode([
               'Government programs',
               'Cultural festivals',
               'Social media challenges',
               'Competitive sports',
           ]),
           'answer'       => 'Cultural festivals',
           'explanation'  => 'Festivals transmit shared values and community identity through collective participation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which factor involves influence from workplace norms and organizational culture?',
           'choices'      => json_encode([
               'Family values',
               'Educational curriculum',
               'Workplace',
               'Media portrayals',
           ]),
           'answer'       => 'Workplace',
           'explanation'  => 'Organizational culture shapes employees’ values through policies, practices, and leadership.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 4 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 4,
           'question'     => 'Which process refers to the passage of values from one generation to the next through social practices?',
           'choices'      => json_encode([
               'Assimilation',
               'Social transmission',
               'Digital diffusion',
               'Cultural isolation',
           ]),
           'answer'       => 'Social transmission',
           'explanation'  => 'Social transmission involves teaching, modeling, and institutional practices that pass values generationally.',
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
