<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot-IoT Intrusion Detection System | Fiona Lista Nivie</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/bot-iot.css">
</head>

<body>

    <?php include '../includes/navbar.php'; ?>

    <main>
        <section class="bi-hero" aria-labelledby="bi-title">
            <div class="container">
                <a class="bi-back-link" href="../index.php#projects">&larr; Back to Projects</a>
                <p class="bi-kicker">Cybersecurity &amp; Machine Learning Case Study</p>
                <h1 id="bi-title">Bot-IoT Intrusion Detection System</h1>
                <p class="bi-lead">
                    A machine learning-based cybersecurity case study focused on detecting malicious network traffic using the UNSW Bot-IoT Dataset and Decision Tree classification.
                </p>

                <div class="bi-tag-list" aria-label="Project technologies">
                    <span>Python 3.11.6</span>
                    <span>Pandas</span>
                    <span>NumPy</span>
                    <span>Scikit-learn</span>
                    <span>Imbalanced-learn</span>
                    <span>Matplotlib</span>
                    <span>Seaborn</span>
                    <span>Visual Studio Code</span>
                </div>

                <div class="bi-meta" aria-label="Project details">
                    <div class="bi-meta-item">
                        <span>Project Type</span>
                        <strong>Cybersecurity &amp; Machine Learning Case Study</strong>
                    </div>
                    <div class="bi-meta-item">
                        <span>Role</span>
                        <strong>Software Engineering Student / Machine Learning Developer</strong>
                    </div>
                    <div class="bi-meta-item">
                        <span>Dataset</span>
                        <strong>UNSW Bot-IoT Dataset</strong>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="overview-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">Project Overview</p>
                    <h2 id="overview-title">Investigating machine learning for network intrusion detection.</h2>
                </div>
                <div class="bi-copy">
                    <p>
                        The Bot-IoT Intrusion Detection System is a machine learning-based cybersecurity case study focused on detecting malicious network traffic. It uses the UNSW Bot-IoT Dataset to investigate how machine learning can be applied in an Intrusion Detection System (IDS) context.
                    </p>
                    <p>
                        The case study covers data preprocessing, Exploratory Data Analysis (EDA), class distribution analysis, class imbalance handling with SMOTE, Decision Tree classification, comparison between Gini Impurity and Entropy, model evaluation, confusion matrix analysis, and feature importance.
                    </p>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="background-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">01</p>
                    <h2 id="background-title">Project Background</h2>
                </div>
                <div class="bi-copy">
                    <p>
                        Modern networks can generate large amounts of traffic, which makes manually identifying potentially malicious activity difficult. An Intrusion Detection System helps examine network activity and identify traffic that may require further investigation.
                    </p>
                    <p>
                        Machine learning can be investigated as an approach for learning patterns from network traffic and classifying observations into relevant categories. This case study uses the UNSW Bot-IoT Dataset to explore that approach in a structured academic workflow.
                    </p>
                </div>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="objectives-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">02</p>
                    <h2 id="objectives-title">Project Objectives</h2>
                </div>
                <ul class="bi-list bi-objectives">
                    <li>To preprocess and prepare the Bot-IoT dataset for machine learning.</li>
                    <li>To perform Exploratory Data Analysis (EDA) on the network traffic data.</li>
                    <li>To investigate class imbalance within the dataset.</li>
                    <li>To apply SMOTE to the training data to address class imbalance.</li>
                    <li>To develop Decision Tree classification models using Gini Impurity and Entropy.</li>
                    <li>To evaluate the classification models using appropriate performance metrics.</li>
                    <li>To analyse feature importance for intrusion detection.</li>
                </ul>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="role-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">03</p>
                    <h2 id="role-title">My Role</h2>
                </div>
                <div class="bi-copy">
                    <p>I worked on the project as a Software Engineering student and Machine Learning developer.</p>
                    <ul class="bi-check-list">
                        <li>Dataset inspection and preparation</li>
                        <li>Data preprocessing</li>
                        <li>Exploratory Data Analysis</li>
                        <li>Feature and target preparation</li>
                        <li>Handling class imbalance</li>
                        <li>Implementing SMOTE</li>
                        <li>Developing Decision Tree models</li>
                        <li>Comparing Gini Impurity and Entropy</li>
                        <li>Model evaluation</li>
                        <li>Generating visualizations</li>
                        <li>Analysing feature importance</li>
                        <li>Testing and debugging the implementation</li>
                        <li>Interpreting machine learning results</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="dataset-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">04</p>
                    <h2 id="dataset-title">Dataset</h2>
                </div>
                <div>
                    <div class="bi-dataset-card">
                        <div><span>Dataset</span><strong>UNSW Bot-IoT Dataset</strong></div>
                        <div><span>Purpose</span><strong>Network Intrusion Detection</strong></div>
                        <div><span>Data Type</span><strong>Network Traffic / Flow-based Data</strong></div>
                        <div><span>Application</span><strong>Cybersecurity &amp; Machine Learning</strong></div>
                    </div>
                    <p class="bi-note">The dataset contains network traffic data associated with normal and malicious activities and is used for research and experimentation in cybersecurity and intrusion detection.</p>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="pipeline-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">05</p>
                    <h2 id="pipeline-title">Machine Learning Pipeline</h2>
                </div>
                <ol class="bi-pipeline">
                    <li><span>01</span>Dataset</li>
                    <li><span>02</span>Data Inspection</li>
                    <li><span>03</span>Data Cleaning &amp; Preprocessing</li>
                    <li><span>04</span>Exploratory Data Analysis</li>
                    <li><span>05</span>Train / Test Split</li>
                    <li><span>06</span>SMOTE on Training Data</li>
                    <li><span>07</span>Decision Tree Training</li>
                    <li><span>08</span>Gini vs Entropy</li>
                    <li><span>09</span>Model Evaluation</li>
                    <li><span>10</span>Feature Importance</li>
                </ol>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="preprocessing-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">06</p>
                    <h2 id="preprocessing-title">Data Preprocessing</h2>
                </div>
                <div class="bi-copy">
                    <p>Preprocessing prepares the network traffic data for machine learning and helps make the workflow clear and reproducible.</p>
                    <ul class="bi-check-list">
                        <li>Dataset inspection</li>
                        <li>Data type checking</li>
                        <li>Missing value inspection</li>
                        <li>Duplicate checking</li>
                        <li>Handling invalid or infinite values where necessary</li>
                        <li>Feature preparation</li>
                        <li>Target variable preparation</li>
                        <li>Train/test splitting</li>
                    </ul>
                    <p class="bi-note">These steps are described as part of the case-study workflow. No dataset execution results are displayed on this page.</p>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="eda-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">07</p>
                    <h2 id="eda-title">Exploratory Data Analysis</h2>
                    <p class="bi-heading-description">EDA is used to understand the dataset before model training; this page does not present fabricated charts or numerical results.</p>
                </div>
                <div class="bi-analysis-grid">
                    <article class="bi-card"><h3>Class Distribution</h3><p>Inspect how observations are distributed across the available classes.</p></article>
                    <article class="bi-card"><h3>Traffic Distribution</h3><p>Review the distribution and characteristics of network traffic data.</p></article>
                    <article class="bi-card"><h3>Feature Characteristics</h3><p>Examine numerical features and their value patterns.</p></article>
                    <article class="bi-card"><h3>Data Quality</h3><p>Check missing values and duplicate records before training.</p></article>
                    <article class="bi-card"><h3>Relationships</h3><p>Explore relationships between selected numerical features.</p></article>
                    <article class="bi-card"><h3>Correlation Analysis</h3><p>Consider correlations where they are appropriate for understanding the data.</p></article>
                </div>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="smote-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">08</p>
                    <h2 id="smote-title">Class Imbalance &amp; SMOTE</h2>
                </div>
                <div class="bi-two-column bi-smote-intro">
                    <div class="bi-copy">
                        <p>Class imbalance occurs when some classes have many more observations than others. An imbalanced dataset can cause a model to pay more attention to majority classes and perform poorly when identifying minority classes.</p>
                        <p>SMOTE (Synthetic Minority Over-sampling Technique) generates synthetic samples for minority classes based on existing minority-class observations.</p>
                    </div>
                    <div class="bi-leakage-note"><strong>Leakage prevention</strong><p>SMOTE must be applied only to the training data. The test set remains untouched so evaluation reflects performance on the original held-out data.</p></div>
                </div>
                <div class="bi-smote-flow" aria-label="SMOTE workflow">
                    <div>Original Dataset</div><span>&darr;</span><div>Train / Test Split</div><span>&darr;</span><div>Training Data</div><span>&darr;</span><div class="bi-flow-highlight">SMOTE</div><span>&darr;</span><div>Resampled Training Data</div><span>&darr;</span><div>Model Training</div>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="tree-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">09</p>
                    <h2 id="tree-title">Decision Tree Classifier</h2>
                    <p class="bi-heading-description">A Decision Tree recursively splits data using feature conditions to classify observations.</p>
                </div>
                <div class="bi-model-grid">
                    <article class="bi-model-card bi-model-gini">
                        <span class="bi-model-label">Model 1</span>
                        <h3>Decision Tree &mdash; Gini Impurity</h3>
                        <p>Gini Impurity measures the impurity of a node based on the distribution of classes. A split is useful when it creates child nodes with a clearer class distribution.</p>
                    </article>
                    <article class="bi-model-card bi-model-entropy">
                        <span class="bi-model-label">Model 2</span>
                        <h3>Decision Tree &mdash; Entropy</h3>
                        <p>Entropy measures the uncertainty or disorder within a node. The tree evaluates splits that reduce this uncertainty when separating classes.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="training-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">10</p>
                    <h2 id="training-title">Model Training</h2>
                </div>
                <div class="bi-copy">
                    <p>Two Decision Tree configurations are investigated: one using Gini Impurity and one using Entropy. Both models are trained using the resampled training data after SMOTE.</p>
                    <p>The test data is kept separate from this process and is reserved for evaluation. This separation supports a fairer assessment and helps prevent data leakage.</p>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="evaluation-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">11</p>
                    <h2 id="evaluation-title">Model Evaluation</h2>
                    <p class="bi-heading-description">The evaluation stage reports metric definitions rather than fabricated values because no executed results are available here.</p>
                </div>
                <div class="bi-metric-grid">
                    <article class="bi-metric-card"><h3>Accuracy</h3><p>Overall proportion of correctly classified observations.</p></article>
                    <article class="bi-metric-card"><h3>Precision</h3><p>How many predicted positive or attack instances were actually correct.</p></article>
                    <article class="bi-metric-card"><h3>Recall</h3><p>How effectively relevant attack instances were identified.</p></article>
                    <article class="bi-metric-card"><h3>F1-score</h3><p>The harmonic mean of Precision and Recall.</p></article>
                    <article class="bi-metric-card"><h3>Confusion Matrix</h3><p>The relationship between actual and predicted classes.</p></article>
                </div>
                <p class="bi-note">For multiclass classification, suitable averaging methods should be selected and explained when actual results are generated.</p>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="confusion-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">12</p>
                    <h2 id="confusion-title">Confusion Matrix</h2>
                </div>
                <div class="bi-copy">
                    <p>A confusion matrix analyses classification errors by comparing actual classes with predicted classes. In a binary setting, it can be discussed using True Positives, True Negatives, False Positives, and False Negatives. For multiclass classification, the matrix represents actual versus predicted classes across the available categories.</p>
                    <div class="bi-confusion-visual" aria-label="Actual class compared with predicted class">
                        <div><span>Actual Class</span><strong>vs</strong><span>Predicted Class</span></div>
                        <p>No numerical matrix is shown because no executed result is available.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="importance-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">13</p>
                    <h2 id="importance-title">Feature Importance</h2>
                </div>
                <div class="bi-copy">
                    <p>Decision Trees can provide feature importance values based on the contribution of features to impurity reduction during tree construction. This can help identify which network traffic features contributed most to the classification process.</p>
                    <p>No feature names or numerical rankings are displayed because actual feature-importance results are not available in the project files. Feature importance indicates model contribution and does not automatically establish causal relationships.</p>
                </div>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="challenges-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">14</p>
                    <h2 id="challenges-title">Development Challenges</h2>
                </div>
                <div class="bi-analysis-grid bi-challenge-grid">
                    <article class="bi-card"><span class="bi-card-number">01</span><h3>Handling a large and complex network traffic dataset</h3><p>Network traffic datasets can contain many attributes and require careful preprocessing.</p></article>
                    <article class="bi-card"><span class="bi-card-number">02</span><h3>Managing class imbalance</h3><p>Minority attack classes can be difficult for classification models to identify reliably.</p></article>
                    <article class="bi-card"><span class="bi-card-number">03</span><h3>Preventing data leakage</h3><p>SMOTE must be applied only to training data so the test set remains suitable for evaluation.</p></article>
                    <article class="bi-card"><span class="bi-card-number">04</span><h3>Interpreting evaluation results</h3><p>Multiple metrics should be considered instead of relying only on accuracy.</p></article>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="approach-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">15</p>
                    <h2 id="approach-title">Development Approach</h2>
                </div>
                <ol class="bi-timeline">
                    <li>Inspecting the dataset</li>
                    <li>Cleaning and preparing data</li>
                    <li>Performing EDA</li>
                    <li>Separating features and target</li>
                    <li>Splitting training and testing data</li>
                    <li>Applying SMOTE to training data</li>
                    <li>Training Decision Tree models</li>
                    <li>Comparing Gini and Entropy</li>
                    <li>Evaluating model performance</li>
                    <li>Analysing feature importance</li>
                    <li>Debugging and refining the implementation</li>
                </ol>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="testing-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">16</p>
                    <h2 id="testing-title">Testing &amp; Validation</h2>
                </div>
                <div class="bi-copy">
                    <ul class="bi-check-list">
                        <li>Data preprocessing verification</li>
                        <li>Class distribution verification</li>
                        <li>Train/test split verification</li>
                        <li>SMOTE application verification</li>
                        <li>Model training verification</li>
                        <li>Classification result verification</li>
                        <li>Confusion matrix analysis</li>
                        <li>Feature importance verification</li>
                        <li>General implementation testing</li>
                        <li>Debugging</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="learning-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">17</p>
                    <h2 id="learning-title">What I Learned</h2>
                </div>
                <ul class="bi-list bi-learning-grid">
                    <li>Applying machine learning concepts to cybersecurity.</li>
                    <li>Understanding network intrusion detection.</li>
                    <li>Working with a real-world cybersecurity dataset.</li>
                    <li>Performing data preprocessing.</li>
                    <li>Performing Exploratory Data Analysis.</li>
                    <li>Understanding class imbalance.</li>
                    <li>Applying SMOTE correctly.</li>
                    <li>Understanding Decision Tree classification.</li>
                    <li>Comparing Gini Impurity and Entropy.</li>
                    <li>Evaluating machine learning models.</li>
                    <li>Interpreting confusion matrices.</li>
                    <li>Analysing feature importance.</li>
                    <li>Improving debugging and problem-solving skills.</li>
                </ul>
            </div>
        </section>

        <section class="bi-section" aria-labelledby="outcome-title">
            <div class="container bi-two-column">
                <div class="bi-section-heading">
                    <p class="section-kicker">18</p>
                    <h2 id="outcome-title">Project Outcome</h2>
                </div>
                <div class="bi-copy">
                    <p>The project produced a machine learning-based intrusion detection case study using the UNSW Bot-IoT Dataset and Decision Tree classification.</p>
                    <p>The implementation demonstrates a complete workflow involving data preprocessing, EDA, SMOTE, Decision Tree classification, model evaluation, and feature importance analysis. No production or real-world deployment result is claimed.</p>
                </div>
            </div>
        </section>

        <section class="bi-reflection" aria-labelledby="reflection-title">
            <div class="container bi-reflection-inner">
                <p class="section-kicker">19</p>
                <h2 id="reflection-title">Project Reflection</h2>
                <p>This project strengthened my understanding of Machine Learning, Cybersecurity, Intrusion Detection Systems, data preprocessing, classification, model evaluation, Python development, and problem-solving. It also connects naturally with my interests in Software Development, Web Development, Quality Assurance, Cybersecurity, and Machine Learning.</p>
            </div>
        </section>

        <section class="bi-section bi-section-muted" aria-labelledby="technology-title">
            <div class="container">
                <div class="bi-section-heading bi-heading-wide">
                    <p class="section-kicker">20</p>
                    <h2 id="technology-title">Technology Stack</h2>
                </div>
                <div class="bi-tech-grid">
                    <span>Python 3.11.6</span>
                    <span>Pandas</span>
                    <span>NumPy</span>
                    <span>Scikit-learn</span>
                    <span>Imbalanced-learn</span>
                    <span>Matplotlib</span>
                    <span>Seaborn</span>
                    <span>Visual Studio Code</span>
                </div>
            </div>
        </section>

        <section class="bi-footer" aria-labelledby="next-step-title">
            <div class="container bi-footer-inner">
                <div>
                    <p class="section-kicker">21</p>
                    <h2 id="next-step-title">Continue Exploring</h2>
                </div>
                <div class="bi-footer-actions">
                    <a class="button button-primary" href="../index.php#projects">&larr; Back to Projects</a>
                    <a class="button button-secondary" href="https://www.linkedin.com/in/fiona-lista-nivie-2530ba254" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                </div>
            </div>
        </section>
    </main>

    <script src="../assets/js/script.js"></script>
</body>
</html>
