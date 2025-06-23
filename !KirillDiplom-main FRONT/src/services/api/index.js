import axios from "axios"
import AuthApi from '@/services/api/auth/index.js'

const instance = axios.create({
  baseURL: import.meta.env.VITE_API_URL ?? 'https://iquest-dev.tomsk-it.ru/api',
})

export const api = {
  auth: AuthApi(instance),
}