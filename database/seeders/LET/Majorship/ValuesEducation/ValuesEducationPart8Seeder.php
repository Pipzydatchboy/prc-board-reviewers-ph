<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart8Seeder extends Seeder
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

       // Part 8 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which digital phenomenon allows rapid dissemination of Filipino cultural values worldwide?',
           'choices'      => json_encode([
               'Social media platforms',
               'Email newsletters',
               'SMS texting',
               'Print media',
           ]),
           'answer'       => 'Social media platforms',
           'explanation'  => 'Social media enables users to share and promote Filipino values instantly to a global audience.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'What term describes the global network that influences Filipino perceptions and value systems?',
           'choices'      => json_encode([
               'World Wide Web',
               'Digital diaspora',
               'Global intranet',
               'Internet of Things',
           ]),
           'answer'       => 'World Wide Web',
           'explanation'  => 'The World Wide Web connects users worldwide, shaping cultural norms and values through shared content.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'The concept of "digital divide" primarily refers to:',
           'choices'      => json_encode([
               'Gap in access to digital technologies',
               'Difference in software branding',
               'Variety of online content',
               'Disparity in language use',
           ]),
           'answer'       => 'Gap in access to digital technologies',
           'explanation'  => 'Digital divide highlights unequal access to computers and internet among different communities.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which skill helps Filipino students critically evaluate online information and uphold values integrity?',
           'choices'      => json_encode([
               'Media literacy',
               'Graphic design',
               'Coding proficiency',
               'Data entry',
           ]),
           'answer'       => 'Media literacy',
           'explanation'  => 'Media literacy teaches students to analyze and verify digital content, supporting ethical information use.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which type of online trend can erode Filipino communal values by promoting individual mimicry of global fads?',
           'choices'      => json_encode([
               'Viral dance challenges',
               'Educational webinars',
               'Charity fundraisers',
               'Public service announcements',
           ]),
           'answer'       => 'Viral dance challenges',
           'explanation'  => 'Viral challenges often encourage individual behavior aligned with global trends rather than local communal practices.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'What process describes the diminishing diversity of local cultures due to global influences?',
           'choices'      => json_encode([
               'Cultural homogenization',
               'Cultural isolation',
               'Cultural relativism',
               'Cultural sustainability',
           ]),
           'answer'       => 'Cultural homogenization',
           'explanation'  => 'Cultural homogenization occurs when globalization leads to a more uniform global culture, impacting local traditions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which value is strengthened when Filipinos engage in online solidarity movements?',
           'choices'      => json_encode([
               'Empathy',
               'Individualism',
               'Apathy',
               'Xenophobia',
           ]),
           'answer'       => 'Empathy',
           'explanation'  => 'Online solidarity fosters empathy by allowing individuals to understand and share the experiences of others.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which practice protects Filipino values online by controlling personal information?',
           'choices'      => json_encode([
               'Using privacy settings',
               'Posting personal data publicly',
               'Ignoring passwords',
               'Sharing all contacts',
           ]),
           'answer'       => 'Using privacy settings',
           'explanation'  => 'Adjusting privacy settings helps safeguard personal and cultural values from misuse online.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'The concept of "digital citizenship" includes which aspect relevant to Filipino values?',
           'choices'      => json_encode([
               'Responsible online behavior',
               'Anonymity promotion',
               'Hacking skills',
               'Unrestricted sharing',
           ]),
           'answer'       => 'Responsible online behavior',
           'explanation'  => 'Digital citizenship involves ethical and respectful conduct in digital spaces.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which strategy can mitigate negative social media effects on Filipino youth’s values?',
           'choices'      => json_encode([
               'Digital detox initiatives',
               'Constant connectivity',
               'Unlimited screen time',
               'Celebrity endorsements',
           ]),
           'answer'       => 'Digital detox initiatives',
           'explanation'  => 'Encouraging breaks from digital devices helps restore focus on real-life values and relationships.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which online threat can distort Filipino values by spreading false information?',
           'choices'      => json_encode([
               'Fake news',
               'Educational videos',
               'E-books',
               'Research journals',
           ]),
           'answer'       => 'Fake news',
           'explanation'  => 'Fake news misinforms the public, undermining trust and ethical decision-making.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which term refers to the online community of Filipinos abroad sharing cultural values?',
           'choices'      => json_encode([
               'Digital diaspora',
               'Virtual village',
               'Global gaggle',
               'Online enclave',
           ]),
           'answer'       => 'Digital diaspora',
           'explanation'  => 'Digital diaspora describes expatriate communities connecting online to maintain cultural ties.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which technology helps preserve Filipino indigenous values through digital records?',
           'choices'      => json_encode([
               'Digital archiving',
               'Blockchain crypto',
               'Augmented reality',
               'IoT sensors',
           ]),
           'answer'       => 'Digital archiving',
           'explanation'  => 'Digital archiving stores cultural artifacts and traditions for future generations.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which online platform exemplifies Filipino-led e-learning initiatives?',
           'choices'      => json_encode([
               'DepEd Commons',
               'Coursera',
               'edX',
               'Udemy',
           ]),
           'answer'       => 'DepEd Commons',
           'explanation'  => 'DepEd Commons is a Philippine government initiative providing free online educational resources.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which challenge arises from global consumer culture online impacting Filipino values?',
           'choices'      => json_encode([
               'Consumerism',
               'Collectivism',
               'Altruism',
               'Frugality',
           ]),
           'answer'       => 'Consumerism',
           'explanation'  => 'Global consumer culture promotes materialism, which can conflict with Filipino communal values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which value can be upheld through online volunteer matching platforms?',
           'choices'      => json_encode([
               'Community service',
               'Profit maximization',
               'Digital isolation',
               'Competitive exclusivity',
           ]),
           'answer'       => 'Community service',
           'explanation'  => 'Volunteer platforms connect users to service opportunities, reinforcing communal care.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which global online campaign raised awareness of Filipino environmental issues?',
           'choices'      => json_encode([
               'Clean Seas Philippines',
               '#ThrowbackThursday',
               '#MannequinChallenge',
               '#IceBucketChallenge',
           ]),
           'answer'       => 'Clean Seas Philippines',
           'explanation'  => 'Clean Seas Philippines is a social media initiative advocating marine conservation in the Philippines.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which phenomenon describes rapid adoption of global values via digital communication?',
           'choices'      => json_encode([
               'Value acceleration',
               'Digital convergence',
               'Cultural lag',
               'Global synchronization',
           ]),
           'answer'       => 'Digital convergence',
           'explanation'  => 'Digital convergence refers to blending technologies and cultures, speeding value exchange.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which initiative supports bridging the digital divide in rural Filipino communities?',
           'choices'      => json_encode([
               'Community Wi-Fi programs',
               'Exclusive data plans',
               'Urban smart cities',
               'Luxury 5G networks',
           ]),
           'answer'       => 'Community Wi-Fi programs',
           'explanation'  => 'Community Wi-Fi projects provide affordable internet access to underserved areas.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 8 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 8,
           'question'     => 'Which value is challenged by exposure to global social media beauty standards?',
           'choices'      => json_encode([
               'Self-acceptance',
               'Conformity',
               'Materialism',
               'Patriotism',
           ]),
           'answer'       => 'Self-acceptance',
           'explanation'  => 'Unrealistic beauty norms can undermine self-acceptance and cultural aesthetic values.',
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
