<?php

namespace Database\Seeders\LET\Majorship\SocialScience;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SocialSciencePart3Seeder extends Seeder
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

        // Part 3 – Question 41
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'In which year did the Philippines gain full independence from the United States?',
            'choices'      => json_encode([
                '1946',
                '1935',
                '1898',
                '1986',
            ]),
            'answer'       => '1946',
            'explanation'  => 'The Treaty of Manila was signed on July 4, 1946, granting full sovereignty to the Philippines.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 42
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which treaty transferred the Philippines from Spanish to American control?',
            'choices'      => json_encode([
                'Treaty of Paris',
                'Treaty of Versailles',
                'Pact of Biak-na-Bato',
                'Treaty of Manila',
            ]),
            'answer'       => 'Treaty of Paris',
            'explanation'  => 'The Treaty of Paris (1898) concluded the Spanish-American War, ceding the Philippines to the U.S.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 43
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'What is the primary measure of a country’s economic output in a year?',
            'choices'      => json_encode([
                'Gross Domestic Product',
                'Consumer Price Index',
                'Balance of Trade',
                'Human Development Index',
            ]),
            'answer'       => 'Gross Domestic Product',
            'explanation'  => 'GDP represents the total value of goods and services produced within a country in a given period.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 44
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which fiscal policy involves adjusting government spending and taxation to influence the economy?',
            'choices'      => json_encode([
                'Monetary policy',
                'Fiscal policy',
                'Trade policy',
                'Supply-side policy',
            ]),
            'answer'       => 'Fiscal policy',
            'explanation'  => 'Fiscal policy uses changes in spending and tax rates to manage economic growth and stability.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 45
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which monetary policy tool is used by the Bangko Sentral ng Pilipinas to influence liquidity by buying or selling government securities?',
            'choices'      => json_encode([
                'Reserve requirement',
                'Discount rate',
                'Open market operations',
                'Moral suasion',
            ]),
            'answer'       => 'Open market operations',
            'explanation'  => 'Open market operations involve the BSP buying or selling government securities to manage money supply.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 46
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which social science method involves observing subjects in their natural environment without intervention?',
            'choices'      => json_encode([
                'Survey research',
                'Experiment',
                'Ethnography',
                'Content analysis',
            ]),
            'answer'       => 'Ethnography',
            'explanation'  => 'Ethnography studies cultures and behaviors by immersing the researcher in the participants’ environment.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 47
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'In anthropology, which term describes the disorientation experienced when encountering a new culture?',
            'choices'      => json_encode([
                'Culture shock',
                'Ethnocentrism',
                'Acculturation',
                'Assimilation',
            ]),
            'answer'       => 'Culture shock',
            'explanation'  => 'Culture shock is the stress and confusion experienced when one cannot rely on familiar cultural cues.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 48
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which branch of psychology studies mental processes such as perception and memory?',
            'choices'      => json_encode([
                'Behavioral psychology',
                'Cognitive psychology',
                'Psychoanalytic psychology',
                'Humanistic psychology',
            ]),
            'answer'       => 'Cognitive psychology',
            'explanation'  => 'Cognitive psychology focuses on internal mental processes like thinking, learning, and memory.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 49
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Tobler\'s first law of geography states that:',
            'choices'      => json_encode([
                'All places are equally connected',
                'Everything is related, but near things are more related than distant things',
                'Geography has no patterns',
                'Only human factors matter',
            ]),
            'answer'       => 'Everything is related, but near things are more related than distant things',
            'explanation'  => 'Tobler\'s law emphasizes spatial interaction decreasing with distance.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 50
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which Southeast Asian conflict lasted from 1955 to 1975 involving North and South parties?',
            'choices'      => json_encode([
                'Vietnam War',
                'Korean War',
                'Philippine–American War',
                'Moro conflict',
            ]),
            'answer'       => 'Vietnam War',
            'explanation'  => 'The Vietnam War was fought between North Vietnam and South Vietnam from 1955 until 1975.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 51
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which Filipino revolutionary is known as the "Father of the Philippine Revolution"?',
            'choices'      => json_encode([
                'Emilio Aguinaldo',
                'Andrés Bonifacio',
                'Apolinario Mabini',
                'Marcelo H. del Pilar',
            ]),
            'answer'       => 'Andrés Bonifacio',
            'explanation'  => 'Andrés Bonifacio founded the Katipunan and led the 1896 revolution.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 52
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'What is the main purpose of a conceptual framework in social science research?',
            'choices'      => json_encode([
                'To test hypotheses',
                'To review literature',
                'To outline variables and their relationships',
                'To collect data',
            ]),
            'answer'       => 'To outline variables and their relationships',
            'explanation'  => 'A conceptual framework visually represents key variables and hypothesized links.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 53
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which ICT term refers to delivering computing services over the internet?',
            'choices'      => json_encode([
                'Cloud computing',
                'Big data',
                'Blockchain',
                'Data mining',
            ]),
            'answer'       => 'Cloud computing',
            'explanation'  => 'Cloud computing provides on-demand resources and services via the internet.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 54
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'The GDPR, implemented in 2018, stands for:',
            'choices'      => json_encode([
                'General Data Protection Regulation',
                'Global Data Privacy Rights',
                'Government Data Policy Review',
                'General Digital Provision Rules',
            ]),
            'answer'       => 'General Data Protection Regulation',
            'explanation'  => 'GDPR is an EU regulation for data protection and privacy.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 55
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'In sociology, the lifelong process of learning norms and values is called:',
            'choices'      => json_encode([
                'Socialization',
                'Stratification',
                'Diffusion',
                'Modernization',
            ]),
            'answer'       => 'Socialization',
            'explanation'  => 'Socialization is how individuals internalize societal norms and roles.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 56
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which painting by Juan Luna won a gold medal at the 1884 Madrid Exposition?',
            'choices'      => json_encode([
                'Spoliarium',
                'The Parisian Life',
                'España y Filipinas',
                'The Blood Compact',
            ]),
            'answer'       => 'Spoliarium',
            'explanation'  => 'The Spoliarium depicted fallen gladiators and won international acclaim for Luna.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 57
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'The process whereby populations move from rural areas to cities is called:',
            'choices'      => json_encode([
                'Urbanization',
                'Industrialization',
                'Globalization',
                'Migration',
            ]),
            'answer'       => 'Urbanization',
            'explanation'  => 'Urbanization describes the increasing proportion of people living in urban areas.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 58
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which concept refers to cooperation among multiple countries on global issues?',
            'choices'      => json_encode([
                'Unilateralism',
                'Bilateralism',
                'Multilateralism',
                'Isolationism',
            ]),
            'answer'       => 'Multilateralism',
            'explanation'  => 'Multilateralism involves multiple states working together on international concerns.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 59
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which theory explains cultural spread through trade, migration, and communication?',
            'choices'      => json_encode([
                'Cultural relativism',
                'Ethnocentrism',
                'Cultural diffusion',
                'Acculturation',
            ]),
            'answer'       => 'Cultural diffusion',
            'explanation'  => 'Cultural diffusion is the spread of cultural elements between societies.',
            'created_at'   => $now,
            'updated_at'   => $now,
        ];

        // Part 3 – Question 60
        $batch[] = [
            'subject_id'   => 14,
            'part'         => 3,
            'question'     => 'Which term describes the dominance of one culture over others globally?',
            'choices'      => json_encode([
                'Cultural pluralism',
                'Cultural imperialism',
                'Cultural diversity',
                'Cultural nationalism',
            ]),
            'answer'       => 'Cultural imperialism',
            'explanation'  => 'Cultural imperialism refers to cultural dominance and influence across borders.',
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
