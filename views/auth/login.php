<div>
    <h1 class="text-center text-4xl font-semibold mt-8 mb-4">Administracion ITSJRC</h1>

    <div class="md:flex pt-10">
        <div class="md:w-1/2 flex justify-center items-center">
            <div class="w-[300px] h-[300px] md:w-[400px] md:h-[400px] flex justify-center items-center mx-auto">
                <img src="src/images/undraw_drink_coffee_cqs1.svg" alt="login image" />
            </div>
        </div>
        <div class="md:w-1/2 bg-white rounded-md shadow">
            <h2 class="text-center text-3xl font-semibold mt-8">Iniciar Sesion</h2>
            <form class="auth p-8 grid space-y-8 text-lg">
                <label>
                    <span class="pl-2 pb-2  font-medium">
                        Correo
                    </span>
                    <input placeholder="Correo" class="border-b border-indigo-700 block w-full !bg-white py-4 px-6 rounded-md" type="text" name="user" id="user" />
                </label>
                <label>
                    <span class="pl-2 pb-4font-medium">
                        Password
                    </span>
                    <input placeholder="Password" class="border-b border-indigo-700 block w-full !bg-white py-4 px-6 rounded-md" type="password" name="password" id="password" />
                </label>
                <button class="bg-indigo-700 text-white font-medium rounded-md py-4 hover:bg-indigo-900 cursor-pointer ease-in duration-[.3s]">Iniciar sesion</button>
                <div class="text-sm">
                    <p>Olvidaste tu contraseña</p>
                    <a class="text-indigo-700 cursor-pointer hover:text-indigo-900">Recuperar contraseña</a>
                </div>
            </form>
        </div>
    </div>

</div>