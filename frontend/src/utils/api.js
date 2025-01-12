import axios from 'axios';

const api = axios.create({
    baseURL: import.meta.env.VITE_API_URL,
    withCredentials: true, // Si Laravel Sanctum est utilisé pour l’authentification
});

export default api;