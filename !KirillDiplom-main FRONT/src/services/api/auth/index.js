import { useCookies } from 'vue3-cookies'

const AuthApi = (instance) => {
  const { cookies } = useCookies()

  const profile = async () => {
    try {
      const response = await instance.get('/api-mods/user', {
        headers: {
          'ngrok-skip-browser-warning': '69420',
          'Authorization': `Bearer ${cookies.get('auth_token')}`
        }
      })
      return response.data.data
    } catch (error) {
      console.log(error)
    }
  }

  const login = async (payload) => {
    try {
      const response = await instance.post('/login', payload, {
        headers: {
          'ngrok-skip-browser-warning': '69420'
        }
      })

      cookies.set('auth_token', response.data.access_token)
      return response.data.data
    } catch (error) {
      console.log(error)
    }
  }

  const registration = async (payload) => {
    try {
      const response = await instance.post('/register', payload, {
        headers: {
          'ngrok-skip-browser-warning': '69420'
        }
      })

      cookies.set('auth_token', response.data.access_token)
      return response.data.data
    } catch (error) {
      console.log(error)
    }
  }

  return { login, registration, profile }
}


export default AuthApi