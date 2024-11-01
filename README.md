![Poniverse logo](./docs/imgs/logo.png)

# Canterlot Avenue Dev Candidate Assessment
Whether you're interested in volunteering for Canterlot Avenue or just looking hone your PHP skills, this respository is a training tool to help familiarize yourself with a generic framework. 

# Testing
Composer can be used to spin up a dev server on localhost:3001

```
composer serve
```

# Assignments
You may test yourself using the assessments in `docs/assessments`

# How to Use

1. Clone this repository
`git clone https://github.com/Poniverse/CADevCandidateAssessment.git`

2. Upload to your PHP server
3. Refer to URLs using `index.php?LOCATION={location here}`
  - These locations may be added using the `index.php`'s $uri_map, assocating the location string to a controller ID.
  - The controller ID can be manually set at `Base/function.php` at `GetController`.