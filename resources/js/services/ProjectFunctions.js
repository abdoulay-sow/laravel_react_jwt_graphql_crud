import axios from 'axios'


export const getProjects = () => {
    return axios.get('/api/projects').then(response => {
        console.log(response)
        return response.data;
    }).catch(err => {
        console.log(err)
    })
}

export const createProject = project => {
    return axios.post('/api/projects', project)
    .then(res => {
        return res;
    }).catch(err => {
        
        throw err
    });
}