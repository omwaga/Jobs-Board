class Errors {
    /**
     * Create a new Errors instance.
     */
     constructor() {
        this.errors = {};
    }


    /**
     * Determine if an errors exists for the given field.
     *
     * @param {string} field
     */
     has(field) {
        return this.errors.hasOwnProperty(field);
    }


    /**
     * Determine if we have any errors.
     */
     any() {
        return Object.keys(this.errors).length > 0;
    }


    /**
     * Retrieve the error message for a field.
     *
     * @param {string} field
     */
     get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }


    /**
     * Record the new errors.
     *
     * @param {object} errors
     */
     record(errors) {
        this.errors = errors;
    }


    /**
     * Clear one or all error fields.
     *
     * @param {string|null} field
     */
     clear(field) {
        if (field) {
            delete this.errors[field];

            return;
        }

        this.errors = {};
    }
}


class Form {
    /**
     * Create a new Form instance.
     *
     * @param {object} data
     */
     constructor(data) {
        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }


    /**
     * Fetch all relevant data for the form.
     */
     data() {
        let data = {};

        for (let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
    }


    /**
     * Reset the form fields.
     */
     reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }

        this.errors.clear();
    }


    /**
     * Send a POST request to the given URL.
     * .
     * @param {string} url
     */
     post(url) {
        return this.submit('post', url);
    }


    /**
     * Send a PUT request to the given URL.
     * .
     * @param {string} url
     */
     put(url) {
        return this.submit('put', url);
    }


    /**
     * Send a PATCH request to the given URL.
     * .
     * @param {string} url
     */
     patch(url) {
        return this.submit('patch', url);
    }


    /**
     * Send a DELETE request to the given URL.
     * .
     * @param {string} url
     */
     delete(url) {
        return this.submit('delete', url);
    }


    /**
     * Submit the form.
     *
     * @param {string} requestType
     * @param {string} url
     */
     submit(requestType, url) {
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
            .then(response => {
                this.onSuccess(response.data);

                resolve(response.data);
            })
            .catch(error => {
                this.onFail(error.response.data);

                reject(error.response.data);
            });
        });
    }


    /**
     * Handle a successful form submission.
     *
     * @param {object} data
     */
     onSuccess(data) {
        alert(data.message); // temporary

        this.reset();
    }


    /**
     * Handle a failed form submission.
     *
     * @param {object} errors
     */
     onFail(errors) {
        this.errors.record(errors.errors);
    }
}


new Vue({
    el: '#app',

    data: {
        details: new Form({
            first_name: '',
            last_name: '',
            home_city: '',
            gender: '',
            date_of_birth: '',
            phone_number: '',
            email: '',
            current_location: '',
            when_to_start: '',
            preferred_location: '',
            job_type: ''
        }),

        projects: new Form({
            project_name:'',
            description:'',
        }),

        education: new Form({
            education_level: '',
            score: '',
            course_type: '',
            graduation_year: '',
            institution: '',
            course: '',
        }),

        internships: new Form({
            organization: '',
            position: '',
            start_date: '',
            end_date: '',
            current_internship: '',
            responsibilities: ''
        }),

        experiences: new Form({
            organization: '',
            position: '',
            start_date: '',
            end_date: '',
            current_work: '',
            responsibilities: ''
        }),

        skills: new Form({
            name:''
        }),

        certifications: new Form({
            certification_name: '',
            start_date: '',
            end_date: '',
            current_certification: ''
        }),

        awards: new Form({
            award_name: '',
            degree_name: ''
        })
    },

    methods: {
        detailsSubmit() {
            this.details.post('/user/details')
            .then(response => alert('Wahoo!'));
        },

        projectsSubmit() {
            this.projects.post('/user/projects')
            .then(response => alert('Wahoo!'));
        },

        educationSubmit() {
            this.education.post('/user/educations')
            .then(response => alert('Wahoo!'));
        },

        internshipsSubmit() {
            this.internships.post('/user/internships')
            .then(response => alert('Wahoo!'));
        },

        experiencesSubmit() {
            this.experiences.post('/user/experiences')
            .then(response => alert('Wahoo!'));
        },

        skillsSubmit() {
            this.skills.post('/user/skills')
            .then(response => alert('Wahoo!'));
        },

        certificationsSubmit() {
            this.certifications.post('/user/certifications')
            .then(response => alert('Wahoo!'));
        },

        awardsSubmit() {
            this.awards.post('/user/awards')
            .then(response => alert('Wahoo!'));
        }
    }
});